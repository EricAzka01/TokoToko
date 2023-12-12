<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

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
        Item::findOrFail($request->item_id)->delete();

        return redirect('/dashboard/inventory')->with('itemDeleteSuccess', 'Item successfully deleted');
    }

    public function edit(Request $request) {
        $item = Item::findOrFail($request->item_id);
        $title = 'Edit ' . $item->i_name;

        return view('dashboard.item_edit', [
            'title' => $title,
            'item' => $item,
        ]);
    }

    public function save_edit(Request $request) {
        $item = Item::findOrFail($request->item_id);
        $title = 'Edit ' . $item->i_name;
        $validator = Validator::make($request->all(), [
            'i_name' => 'required|min:5|max:100',
            'i_price' => 'required|integer',
            'i_description' => 'required|max:250',
            'i_stock' => 'required|integer',
        ]);

        if ($validator->fails()) {
            // dd($validator->failed());
            return view('dashboard.item_edit', [
                'item' => $item,
                'title' => $title,
            ]);
        }

        $validated = $validator->valid();
        $item['i_name'] = $validated['i_name'];
        $item['i_price'] = $validated['i_price'];
        $item['i_description'] = $validated['i_description'];
        $item['i_stock'] = $validated['i_stock'];
        $item->save();

        return redirect('/dashboard/inventory')->with('itemUpdateSuccess', 'Item successfully updated');
    }

    public function item_view(Item $item) {
        $title = 'View ' . $item->i_name;

        return view('dashboard.item_view', [
            'title' => $title,
            'item' => $item,
        ]);
    }
}
