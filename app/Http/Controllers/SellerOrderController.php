<?php

namespace App\Http\Controllers;
use Auth;

class SellerOrderController extends Controller
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
        
        $title = 'Order';

        return view('dashboard.order', [
            'sidebarMenu' => $sidebarMenu,
            'title' => $title,
        ]);
    }
}
