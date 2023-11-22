<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Seller;

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
            "email" => "required|unique:use",
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
            "shopname" => "required|unique:sellers",
            "email" => "required|unique:sellers",
            "phoneno" => "required|unique:sellers",
            "address" => "required",
            "password"=> "required",
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Seller::create($validated);

        return redirect('/login')->with('registerSuccess', 'Register success. Please login to continue');
    }
}
