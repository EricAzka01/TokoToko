<?php

namespace App\Http\Controllers;
use Auth;

class DashboardInventoryController extends Controller
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
        $title = 'Inventory';

        return view('dashboard.inventory', [
            'sidebarMenu' => $sidebarMenu,
            'title' => $title,
        ]);
    }
}
