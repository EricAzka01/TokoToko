<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Auth;

use Illuminate\Http\Request;

class ProfileBuyerController extends Controller
{
    public function index(){
        $buyer = Auth::user();
        $orders = Transaction::where('buyer_id', $buyer->id)->with('item')->with('buyer')->get();

        return view('profilebuyer', [ 
            'title' => $buyer->b_name . "'s Profile",
            'orders' => $orders,
            'user' => $buyer,
        ]); 
    }
}
