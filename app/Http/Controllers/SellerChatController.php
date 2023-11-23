<?php

namespace App\Http\Controllers;
use Auth;

class SellerChatController extends Controller
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

        $title = 'Chat';
        $user = Auth::user();

        return view('dashboard.chat', [
            'sidebarMenu' => $sidebarMenu,
            'title' => $title,
            'user' => $user,
        ]);
    }
}
