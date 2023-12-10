<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Buyer;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $itemsAll = Item::inRandomOrder()
            ->take(6)
            ->get();
        $buyer = Auth::user();
        $cartItems = $buyer
            ->carts()
            ->with('item')
            ->get()
            ->reverse()
            ->pluck('item');

        return view('cart', [
            'itemsAll' => $itemsAll,
            'cartItems' => $cartItems,
            'buyer' => $buyer,
            'title' => 'Cart',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'buyer_id' => 'required',
            'item_id' => 'required',
        ]);

        Cart::create($validated);

        return redirect('/cart');
    }

    public function checkout(Request $request)
    {
        $item = Item::where('id', $request->item_id)->first();

        return redirect('/payment')->with([
            'item' => $item,
        ]);
    }

    public function delete(Request $request)
    {
        $buyerId = Auth::user()->id;
        $itemId = $request->item_id;
        Cart::where('buyer_id', $buyerId)
            ->where('item_id', $itemId)
            ->first()
            ->delete();

        return redirect('/cart');
    }
}
