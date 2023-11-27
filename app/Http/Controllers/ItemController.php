<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        return view('item', [
            "title" => "Item"
        ]);
    }

    function generate_filename($inputString) {
        // Convert to lowercase
        $lowercaseString = strtolower($inputString);
    
        // Replace spaces with hyphens
        $processedString = str_replace(' ', '-', $lowercaseString);
    
        return $processedString;
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'i_name' => 'required|min:5|max:100',
            'i_price' => 'required|integer',
            'i_description' => 'required|max:250',
            'i_stock' => 'required|integer',
            'i_image' => 'required|mimes:jpg,jpeg,png,webp',
            'seller_id' => 'required',
        ]);

        // TODO: Fix filename extension (get original file extension first)
        if ($request->file('i_image')) {
            $filename = $this->generate_filename($validated['i_name'] . '.jpg');
            $request->file('i_image')->storeAs('public/item_images', $filename);
            $validated['i_image'] = '/storage/item_images/' . $filename;
        }

        Item::create($validated);

        return redirect('/dashboard/inventory')->with('addItemSuccess', "Successfully added new item");
    }
}
