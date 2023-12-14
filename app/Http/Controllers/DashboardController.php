<?php

namespace App\Http\Controllers;
use App\Models\Item;

use App\Models\Transaction;
use Auth;

class DashboardController extends Controller
{
    private $sidebarMenu = [
        [
            'name' => 'Home',
            'url' => '/dashboard',
            'icon' => 'home',
        ],
        [
            'name' => 'Inventory',
            'url' => '/dashboard/inventory',
            'icon' => 'package'
        ],
        [
            'name' => 'Order',
            'url' => '/dashboard/order',
            'icon' => 'shopping-cart'
        ],
    ];

    public function view_home() {
        $title = 'Home';
        $seller = Auth::guard('seller')->user();

        return view('dashboard.home', [
            'sidebarMenu' => $this->sidebarMenu,
            'title' => $title,
            'seller' => $seller,
        ]);
    }

    public function view_chat() {
        $title = 'Chat';
        $user = Auth::user();

        return view('dashboard.chat', [
            'sidebarMenu' => $this->sidebarMenu,
            'title' => $title,
            'user' => $user,
        ]);
    }

    public function view_inventory() {
        $title = 'Inventory';
        $sellerId = Auth::guard('seller')->user()->id;
        $items = Item::where('seller_id', $sellerId)->get();

        return view('dashboard.inventory', [
            'sidebarMenu' => $this->sidebarMenu,
            'title' => $title,
            'items' => $items,
        ]);
    }

    public function view_order() {
        $title = 'Order';
        $sellerId = Auth::guard('seller')->user()->id;
        $orders = Transaction::where('seller_id', $sellerId)->with('item')->with('buyer')->get();

        return view('dashboard.order', [
            'sidebarMenu' => $this->sidebarMenu,
            'title' => $title,
            'orders' => $orders,
        ]);
    }
}
