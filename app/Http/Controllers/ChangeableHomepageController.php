<?php

namespace App\Http\Controllers;

use App\Models\ChangeableHomepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeableHomepageController extends Controller
{
    // Grabs data from DB and sends it to homepage
    public function homepage()
    {
        $content = DB::table('changeable_homepages')
            ->select('header', 'pElement1', 'pElement2', 'pElement3', 'pElement4')
            ->get();

        return view('homepage/home', [
            'content' => $content
        ]);
    }

    // Gets data from DB and sends it to update page
    public function changeHomepageContent()
    {
        $content = DB::table('changeable_homepages')
            ->select('header', 'pElement1', 'pElement2', 'pElement3', 'pElement4')
            ->get();

        return view('homepage.editContent', [
            'content' => $content
        ]);
    }

    // Function to update the content to DB
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
