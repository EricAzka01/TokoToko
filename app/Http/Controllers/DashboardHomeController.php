<?php

namespace App\Http\Controllers;
use Auth;

class DashboardHomeController extends Controller
{
    public function index() {
        $sidebarMenu = [
            [
                'name' => 'Home',
                'url' => '/',
            ],
            [
                'name' => 'Inventory',
                'url' => '/inventory',
            ],
            [
                'name' => 'Order',
                'url' => '/order'
            ],
        ];

        $title = 'Home';
        $user = Auth::user();

        return view('dashboard.home', [
            'sidebarMenu' => $sidebarMenu,
            'title' => $title,
            'user' => $user,
        ]);
    }
}
