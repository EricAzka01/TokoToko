<?php

namespace App\Http\Controllers;
use App\Models\Item;

class HomeController extends Controller
{
    public function index() {
        $items = Item::all();
        $title = 'Home';

        return view('home', [
            'title' => $title,
            'items' => $items,
        ]);
    }
}
