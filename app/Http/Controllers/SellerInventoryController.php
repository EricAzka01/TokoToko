<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Auth;
use Illuminate\Http\Request;

class SellerInventoryController extends Controller
{
    public function index() {
        $sidebarMenu = [
            [
                'name' => 'Home',
                'url' => '/',
                'icon' => 'home',
            ],
            [
                'name' => 'Inventory',
                'url' => '/inventory',
                'icon' => 'package'
            ],
            [
                'name' => 'Order',
                'url' => '/order',
                'icon' => 'shopping-cart'
            ],
            [
                'name' => 'Chat',
                'url' => '/admin_chat',
                'icon' => 'message-circle'
            ],
        ];
        
        $title = 'Inventory';
        $userId = Auth::guard('seller')->user()->id;
        $items = Item::where('seller_id', $userId)->get();

        return view('dashboard.inventory', [
            'sidebarMenu' => $sidebarMenu,
            'title' => $title,
            'items' => $items,
        ]);
    }

    public function display_inventory_add_view() {
        $userId = Auth::guard('seller')->user()->id;
        $title = 'Add Item';

        return view('dashboard.inventory_add', [
            'title' => $title,
            'userId' => $userId,
        ]);
    }

    function generate_filename($inputString) {
        // Convert to lowercase
        $lowercaseString = strtolower($inputString);
    
        // Replace spaces with hyphens
        $processedString = str_replace(' ', '-', $lowercaseString);
    
        return $processedString;
    }
    

    public function add_item(Request $request) {
        $validated = $request->validate([
            'i_name' => 'required|min:5|max:100',
            'i_price' => 'required|integer',
            'i_description' => 'required|max:250',
            'i_stock' => 'required|integer',
            'i_image' => 'required|mimes:jpg,jpeg,png,webp',
            'seller_id' => 'required',
        ]);

        if ($request->file('i_image')) {
            $filename = $this->generate_filename($validated['i_name'] . '.jpg');
            $request->file('i_image')->storeAs('public/item_images', $filename);
            $validated['i_image'] = '/storage/item_images/' . $filename;
        }

        Item::create($validated);

        return redirect('/inventory')->with('addItemSuccess', "Successfully added new item");
    }
}
