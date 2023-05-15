<?php

namespace App\Http\Controllers\UserControllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function index(Request $request)
    {
        $query = Phone::query();

        if($request->has('search') && $request->search != '') {
            $search = $request->search;
            $searchTerms = explode(' ', $search); // Split the search string into individual words

            foreach ($searchTerms as $term) {
                $query = $query->where(function ($q) use ($term) {
                    $q->where('title', 'LIKE', '%' . $term . '%')
                    ->orWhere('description', 'LIKE', '%' . $term . '%');
                });
            }
        }

        if ($request->has('sort_date')) {
            if ($request->sort_date == 'newest') {
                $query = $query->orderBy('created_at', 'desc');
            } elseif ($request->sort_date == 'oldest') {
                $query = $query->orderBy('created_at', 'asc');
            }
        }

        if ($request->has('sort_price')) {
            if ($request->sort_price == 'highest') {
                $query = $query->orderBy('price', 'desc');
            } elseif ($request->sort_price == 'lowest') {
                $query = $query->orderBy('price', 'asc');
            }
        }

        $phones = $query->paginate(10);
        if ($request->ajax()) {
            return response()->json([
                'html' => view('UserViews.Home.phonelist', ['phones' => $phones])->render(),
                'isEmpty' => $phones->isEmpty()
            ]);
        }

        return view('UserViews.Home.home', ['phones' => $phones]);
    }


}
