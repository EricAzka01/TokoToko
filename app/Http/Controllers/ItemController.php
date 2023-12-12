<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Auth;

class ItemController extends Controller
{
    public function index(Item $item)
    {
        $itemsAll = Item::inRandomOrder()->take(6)->get();
        $itemsBySeller = Item::where('seller_id', $item->seller_id)->take(6)->get();
        $buyer = Auth::user();

        return view('item', [
            'item' => $item,
            'buyer' => $buyer,
            'itemsBySeller' => $itemsBySeller,
            'itemsAll' => $itemsAll,
            'title' => $item->i_name,
        ]);
    }

    function generate_filename($inputString)
    {
        // Convert to lowercase
        $lowercaseString = strtolower($inputString);

        // Replace spaces with hyphens
        $processedString = str_replace(' ', '-', $lowercaseString);

        return $processedString;
    }

    function generate_slug($i_name)
    {
        $cleaned_name = preg_replace('/[^a-zA-Z0-9]+/', '-', $i_name);
        $lowercase_name = strtolower($cleaned_name);
        $slug = str_replace(' ', '-', $lowercase_name);
        $hashed_name = hash('sha256', $i_name);
        $hashed_suffix = substr($hashed_name, 0, 10);
        $final_slug = $slug . '-' . $hashed_suffix;
        return $final_slug;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'i_name' => 'required|min:5|max:100',
            'i_price' => 'required|integer',
            'i_description' => 'required|max:250',
            'i_stock' => 'required|integer',
            'i_image' => 'required|mimes:jpg,jpeg,png,webp',
            'seller_id' => 'required',
        ]);

        $validated['i_slug'] = $this->generate_slug($validated['i_name']);

        if ($request->file('i_image')) {
            $file = $request->file('i_image');
            $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/item_images/' . $filename);
            $validated['i_image'] = '/storage/item_images/' . $filename;
        }

        Item::create($validated);

        return redirect('/dashboard/inventory')->with('addItemSuccess', 'Successfully added new item');
    }

    public function delete(Request $request) {
        Item::find($request->item_id)->delete();

        return redirect('/dashboard/inventory')->with('itemDeleteSuccess', 'Item successfully deleted');
    }
}
