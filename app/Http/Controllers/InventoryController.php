<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {
        $items = Item::all()->reverse();

        return view("inventory", [
            "title" => "Inventory",
            "items"=> $items,
        ]);
    }

    public function add_item_view() {
        return view("add_item", [
            "title" => "Add new item",
        ]);
    }
}