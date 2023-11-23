<?php

namespace App\Http\Controllers;
use Auth;

class DashboardOrderController extends Controller
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
        $title = 'Order';

        return view('dashboard.order', [
            'sidebarMenu' => $sidebarMenu,
            'title' => $title,
        ]);
    }
}
