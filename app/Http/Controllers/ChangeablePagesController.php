<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\aboutUsEdit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeablePagesController extends Controller
{
    //* shows all the data on the about us page
    public function indexAboutUs()
    {
        //* gets the data from database
        $mainInfo = aboutUsEdit::all();
        //* sends the data to the page
        return view('changeable_Pages/about_us.index', compact('mainInfo'));
    }
    //* this is the edit function for the title and image
    public function editMainAboutUs()
    {
        //* gets the data from database
        $mainInfo = aboutUsEdit::all();
        //* sends data and user to this page
        return view('changeable_Pages/about_us.editMain', compact('mainInfo'));
    }

    //* this is the update function for the title and image 
    public function updateMainAboutUs(Request $request)
    {
        //* checks if the data fits the requirements
        $validated = $request->validate([
            'title' => 'nullable',
            'image' => 'nullable',
            'header1' => 'nullable',
            'content1' => 'required',
            'header2' => 'nullable',
            'content2' => 'required',
            'header3' => 'nullable',
            'content3' => 'required',
            'header4' => 'nullable',
            'content4' => 'required'
        ]);

        //* updates the data in the database
        DB::table('about_us_edits')->update($validated);
        //* sends the user back to the index page
        return redirect(route('aboutUs.index'));
    }
}
