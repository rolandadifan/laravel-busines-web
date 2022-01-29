<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.page.profile.index');
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        if($request->password){
            $password = $request->password;
            $hash = Hash::make($password);

            $user->update([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'password' => $hash
            ]);
            $user->save();
            return redirect()->back()->with('status', 'Successfuly update profile');
        }else{
            $user->update([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
            ]);
            $user->save();
            return redirect()->back()->with('status', 'Successfuly update profile');
        }
    }
}
