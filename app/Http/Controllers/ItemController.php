<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    public function index() {
        $itemsres = User::whereNull('forenid')
            ->with('childItems')
            ->get();
        
        return view('items', compact('itemsres'));
    }
}
