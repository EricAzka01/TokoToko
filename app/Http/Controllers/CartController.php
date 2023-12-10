<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Buyer;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(){
        $itemsAll = Item::inRandomOrder()->take(6)->get();
        $buyer = Buyer::find(Auth::user()->id);
        $cartItems = $buyer->carts()->with('item')->get()->pluck('item');

        return view('cart', [
            'itemsAll' => $itemsAll, 
            'cartItems' => $cartItems,
            "title" => "Cart",
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'buyer_id' => 'required',
            'item_id' => 'required',
        ]);

        Cart::create($validated);

        return redirect('/cart');
    }
}
