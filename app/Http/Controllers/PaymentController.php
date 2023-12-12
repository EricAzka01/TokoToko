<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Item;

class PaymentController extends Controller
{
    public function index(Request $request){
        $item = Item::findOrFail($request->item_id);
        $user = Auth::user();

        return view('payment', [ 
            "title" => "Payment",
            'user' => $user,
            'item' => $item,
        ]);
    }
}
