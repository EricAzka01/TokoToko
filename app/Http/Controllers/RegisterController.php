<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view("register", [
            "title" => "Register",
        ]);
    }

    //Buyer
    public function register_buyer(Request $request) {
        $validated = $request->validate([
            "name"=> "required|min:2|max:50",
            "email" => "required|unique:buyers",
            "phoneno" => "required|unique:buyers",
            "address" => "required",
            "password"=> "required",
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('registerSuccess','Register success. Please login to continue');
    }

    //Seller
    public function register_seller(Request $request){
        $validated = $request->validate([
            "name" => "required|unique:users",
            "toko" => "required|",
            "email" => "required",
            "phoneno" => "required",
            "address" => "required",
            "password"=> "required",
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('registerSuccess', 'Register success. Please login to continue');
    }
}
