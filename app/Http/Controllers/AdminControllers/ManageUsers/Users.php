<?php

namespace App\Http\Controllers\AdminControllers\ManageUsers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
class Users extends Controller
{
    public function userList()
    {
        // Fetch users whose banned value is false
        $users = User::all();

        // Pass the users data to the view
        return view('AdminViews.ManageUsers.userList', ['users' => $users]);
    }
    public function usersReport()
    {
        $usersReport = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get();

        // Pass the users data to the view
        return view('AdminViews.ManageUsers.report', compact('usersReport'));
    }

    public function updateUser(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($id),
            ],
            'phone' => [
                'required',
                'digits_between:10,15',
                Rule::unique('users', 'phone')->ignore($id),
            ],
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);
        $currentProfileImage = $user->photo;

        if ($request->hasFile('photo')) {
            $profileImage = $request->file('photo');
            $filename = "user_id_" . $id . "_" . time() . '.' . $profileImage->getClientOriginalExtension();
            $path = $profileImage->storeAs('profile_photos', $filename, 'public');
            $user->photo = "/storage/profile_photos/" . $filename;

            // Delete the old profile image if it exists
            if ($currentProfileImage) {
                if ($currentProfileImage != "/storage/profile_photos/default_profile_photo.jpg") {
                    Storage::delete('public/profile_photos/' . $currentProfileImage);}
            }
        }

        // Update user data excluding the photo column
        $user->update($request->except('photo'));

        // Save the changes
        if ($user->save()) {
            // Redirect to the users list with a success message
            return redirect()->route('users.list')->with('admin_status', 'User information updated successfully');
        }
        // Redirect to the users list with a Error message
        return redirect()->route('users.list')->with('admin_error', 'Error! Unable to update user information');
    }

    public function sendPasswordResetLink(Request $request, $id)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with(['status' => __($status)]);
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
        return response()->json(['message' => 'Password reset link sent successfully.']);
    }

}
