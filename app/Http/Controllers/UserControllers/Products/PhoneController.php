<?php

namespace App\Http\Controllers\UserControllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhoneController extends Controller
{

    public function addPhone($id = null)
    {

        $brands=Brands::all();
        $phone = null;
        if (!empty($id)) {
            $phone = Phone::find($id);
        }
        return view('UserViews.Product.addproduct', compact('phone','brands'));

    }

    public function phoneList()
    {
        $phones = Auth::user()->phones()->latest()->get();

        return view('UserViews.Product.manage-products', compact('phones'));
    }

    public function deletePhone($id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();

        return redirect()->route('phones.list')->with('success', 'Phone has been successfully deleted.');
    }

    public function phoneDetails($id)
    {

        $phone = Phone::find($id);
        return view('UserViews.Product.product-details', compact('phone'));
    }
    public function createPhone(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|numeric',
            'color' => 'required',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'purchase_proof' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'encoded_images' => 'sometimes|array',

        ]);

        $validatedData = $request->all();
        $validatedData['user_id'] = Auth::id();

        if (!empty($validatedData['accessories'])) {

            $validatedData['accessories'] = json_encode($validatedData['accessories']);
        }

        // Handle the main_image file upload
        $mainImage = $request->file('main_image');
        $mainImageName = time() . '_' . $mainImage->getClientOriginalName();
        $mainImagePath = $mainImage->storeAs('thumbnails', $mainImageName, 'public');
        $validatedData['main_image'] = "/storage" . "/" . $mainImagePath;

        // Handle the purchase_proof file upload, if present
        if ($request->hasFile('purchase_proof')) {
            $purchaseProof = $request->file('purchase_proof');
            $purchaseProofName = time() . '_' . $purchaseProof->getClientOriginalName();
            $purchaseProofPath = $purchaseProof->storeAs('purchase_proofs', $purchaseProofName, 'public');
            $validatedData['purchase_proof'] = "/storage" . "/" . $purchaseProofPath;
        } else {
            $validatedData['purchase_proof'] = null;
        }

        if ($request->has('encoded_image')) {
            $additionalImages = $request->input('encoded_image');

            $additionalImagePaths = [];

            foreach ($additionalImages as $index => $encodedImage) {
                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $encodedImage));
                $imageName = time() . '_' . $index . '.png';
                $imagePath = 'additional_images/' . $imageName;

                Storage::disk('public')->put($imagePath, $imageData);
                $additionalImagePaths[] = "/storage" . "/" . $imagePath;
            }

            $validatedData['additional_images'] = json_encode($additionalImagePaths);
        } else {
            $validatedData['additional_images'] = null;
        }

        $phone = Phone::create($validatedData);

        // Redirect to a desired page, for example, the phone's details page
        return redirect()->route('phones.list', $phone->id)->with('success', 'Phone has been successfully added.');
    }

}
