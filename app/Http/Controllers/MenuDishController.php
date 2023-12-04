<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\MenuDish;

class MenuDishController extends Controller
{
    public function index(){
        $menuDish = MenuDish::all();
        $dish = Dish::all();
        $menu = Menu::all();

        return view("menu.index", [
            'menuDish' => $menuDish,
            'dishses' => $dish,
            'menus' => $menu]);
    }
}
