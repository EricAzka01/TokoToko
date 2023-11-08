<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemCondition;
use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function item_add_view() {
        $item_types = ItemType::all();
        $item_conditions = ItemCondition::all();

        return view("item_add", [
            "title" => "Add Item",
            "types" => $item_types,
            "conditions" => $item_conditions,
        ]);
    }

    public function item_add(Request $request) {
        $validated = $request->validate([
            "type" => "required",
            "condition" => "required",
            "description" => "required",
            "defects" => "required",
            "amount" => "required|integer",
            "image" => "required|mimes:jpg,jpeg,png"
        ]);

        if ($request->file('image')) {
            $validated['image'] = '/storage/' . $request->file('image')->store('items_img');
        }

        Item::create($validated);

        return redirect('/inventory')->with('addItemSuccess', "Successfully added new item");
    }
}
