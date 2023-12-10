<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(){
        $itemsAll = Item::inRandomOrder()->take(6)->get();

        return view('cart', [
            'itemsAll' => $itemsAll, 
            "title" => "Cart",
        ]);
    }

    public function store(Request $request) {
        dd($request);
    }
}
