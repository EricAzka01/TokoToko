<?php

namespace App\Http\Controllers;
use App\Models\Item;

class HomeController extends Controller
{
    public function index() {
        setlocale(LC_MONETARY,"id_ID");
        $items = Item::inRandomOrder()->get();
        $title = 'Home';

        return view('home', [
            'title' => $title,
            'items' => $items,
        ]);
    }
}
