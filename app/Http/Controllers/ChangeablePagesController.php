<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\changeablePages;
use App\Models\changeablePagesContent;
use Illuminate\Http\Request;

class ChangeablePagesController extends Controller
{
    public function createOneAboutUs()
    {
        return view('changeable_pages/about_us.index');
    }

    public function storeOneAboutUs(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
        ]);

        changeablePages::create($validated);

        return redirect(route('aboutUs.createContent'));
    }

    public function createTwoAboutUs()
    {
        return view('changeable_pages/about_us.createContent');
    }

    public function storeTwoAboutUs(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'header' => 'nullable',
            'content' => 'required',
        ]);

        changeablePagesContent::create($validated);

        return redirect(route('aboutUs.index'));
    }
}
