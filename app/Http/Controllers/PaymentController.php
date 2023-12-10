<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){

        $user = Auth::user();

        return view('payment', [ 
            "title" => "Payment",
            'user' => $user,
        ]); 
    }
}
