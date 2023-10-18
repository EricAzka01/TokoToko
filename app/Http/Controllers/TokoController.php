<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index() {
        $items = Item::all();

        return view('toko', [
            'items' => $items
        ]);
        
    }
}
