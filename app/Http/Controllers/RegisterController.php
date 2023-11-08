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

    public function store(Request $request) {
        $validated = $request->validate([
            "username"=> "required|unique:users",
            "password"=> "required",
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('registerSuccess','Register success. Please login to continue');
    }
}
