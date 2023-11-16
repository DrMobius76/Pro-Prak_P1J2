<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{
    public function index()
    {
        $menuItems = MenuItems::all();
        return view("menu.menu", ['' => $menuItems]);
    }
}
