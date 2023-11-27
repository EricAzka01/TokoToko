<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Auth;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {
        $userId = Auth::guard('seller')->user()->id;
        $title = 'Add Item';

        return view('dashboard.inventory_add', [
            'title' => $title,
            'userId' => $userId,
        ]);
    }
}