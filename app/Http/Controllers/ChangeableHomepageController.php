<?php

namespace App\Http\Controllers;

use App\Models\ChangeableHomepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeableHomepageController extends Controller
{
    public function homepage()
    {
        $content = DB::table('changeable_homepages')
            ->select('header', 'pElement1', 'pElement2', 'pElement3', 'pElement4')
            ->get();

        // foreach ($content as $element) {
        //     dd($element->header);
        // };

        return view('homepage/home', [
            'content' => $content
        ]);

        // return view('homepage/home', compact('content'));
    }

    public function changeHomepageContent()
    {
        $content = DB::table('changeable_homepages')
            ->select('header', 'pElement1', 'pElement2', 'pElement3', 'pElement4')
            ->get();

        return view('homepage.editContent', [
            'content' => $content
        ]);
    }

    public function updateContent(Request $request)
    {
        $validatedData = $request->validate([
            'header'   => 'required',
            'pElement1' => 'required',
            'pElement2' => 'required',
            'pElement3' => 'required',
            'pElement4' => 'required',
        ]);

        $content = ChangeableHomepage::first();
        $content->update($validatedData);

        return redirect()->route('homepage.view')->with('success', 'Content updated successfully');
    }
}
