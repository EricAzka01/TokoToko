<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class ProfileBuyerController extends Controller
{
    public function index(){

        $user = Auth::user();

        return view('profilebuyer', [ 
            "title" => "Profile",
            'user' => $user,
        ]); 
    }
}
