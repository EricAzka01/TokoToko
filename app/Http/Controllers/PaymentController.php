<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function index(){
        $user = Auth::user();
        $item = Session::get('item');

        // If we're not being redirected from /cart,
        // just redirect home
        // Because we need the data passed in the session
        if ($item == null) {
            return redirect('/');
        }

        return view('payment', [ 
            "title" => "Payment",
            'user' => $user,
            'item' => $item,
        ]);
    }
}
