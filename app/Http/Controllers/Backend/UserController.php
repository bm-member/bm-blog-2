<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{
    public function profile()
    {
        return view('backend.user.profile');
    }

    public function edit()
    {
        return view('backend.user.edit');
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $user = User::find(auth()->id());
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->hasFile('image')) {
            $img = $request->file('image');
            $folder = public_path('upload/profile/');
            $imgName = time() . '.' . $img->getClientOriginalExtension();
            $img->move($folder, $imgName);
            $user->image = $imgName;
        }

        if($request->password !== null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
     
        return redirect('admin/profile')->with('status', 'User was updated successfully.');
    }
}
