<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewMenu()
    {
        //
        $menuItems = Menu::all();

        return view('menu.view', compact('menuItems'));
    }

    public function viewMenuNonAdmin()
    {
        //
        $menuItems = Menu::all();

        return view('menu.viewNonAdmin', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'item_name' => 'required',
            'item_price' => 'required',
            'item_description' => 'required',
            'item_allergens' => 'required',
        ]);

        Menu::create($data);
        return redirect(route('menu.view'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $info)
    {
        //
        return view('menu.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $info)
    {
        //

        $data = $request->validate([
            'item_name' => 'required',
            'item_price' => 'required',
            'item_description' => 'required',
            'item_allergens' => 'required',
        ]);

        $info->update($data);

        return redirect(route('menu.view'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $info)
    {
        $info->delete();
        return redirect(route('menu.view'));
    }
}
