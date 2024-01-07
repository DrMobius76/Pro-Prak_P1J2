<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\changeablePagesContent;
use App\Models\changeablePages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeablePagesController extends Controller
{
    //* shows all the data on the about us page
    public function indexAboutUs()
    {
        //* gets the header and image data from database
        $mainInfo = changeablePages::all();
        //* get the header and content data from the database
        $contentInfo = changeablePagesContent::all();
        //* sends the data to the page
        return view('changeable_Pages/about_us.index', compact('mainInfo', 'contentInfo'));
    }

    //* this is the create function for the title and image
    public function createMainAboutUs()
    {
        //* returns data to the page
        return view('changeable_Pages/about_us.createMain');
    }
    //* this is the store functino for the title and image
    public function storeMainAboutUs(Request $request)
    {
        //* checks if the data validates the requirements
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'nullable'
        ]);
        //* creates the data in the database
        changeablePages::create($validated);
        //* goes to this route
        return redirect(route('aboutUs.createContent'));
    }
    //* this is the create function for the header and content
    public function createContentAboutUs()
    {
        //* sends the user to this page
        return view('changeable_Pages/about_us.createContent');
    }
    //* this is the store function for the header and content
    public function storeContentAboutUs(Request $request)
    {
        //* checks if the data fits the requirements
        $validated = $request->validate([
            'header' => 'nullable',
            'content' => 'required'
        ]);
        //* creates the data for the header and content in the database
        changeablePagesContent::create($validated);
        //* sends the user to the index page
        return redirect(route('aboutUs.index'));
    }
    //* this is the edit function for the title and image
    public function editMainAboutUs(changeablePages $info)
    {
        //* sends data and user to this page
        return view('changeable_Pages/about_us.editMain', compact('info'));
    }

    //* this is the update function for the title and image 
    public function updateMainAboutUs(Request $request)
    {
        //* checks if the data fits the requirements
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'nullable'
        ]);

        //* updates the data in the database
        DB::table('changeable_pages')->update($validated);
        //* sends the user back to the index page
        return redirect(route('aboutUs.index'));
    }
    //* this is the edit function for the header and content
    public function editContentAboutUs(changeablePagesContent $info)
    {
        //* sends the user and data to this page
        return view('changeable_Pages/about_us.editContent', compact('info'));
    }
    //* this is the update function for the header and content
    public function updateContentAboutUs(Request $request)
    {
        //* checks if the data fits the requirements
        $validated = $request->validate([
            'header' => 'nullable',
            'content' => 'required'
        ]);
        //* updates the header and content data in the database on the id you clicked on
        DB::table('changeable_pages_contents')->where('id', $request->id)->update($validated);
        //* sends the user to the index page
        return redirect(route('aboutUs.index'));
    }
    //* this is the delete function for the title and image
    public function deleteMainAboutUs(changeablePages $info)
    {
        //* this deletes the data with the same id you clicked on
        $info->delete();
        //* sends the user back to the index page
        return redirect(route('aboutUs.index'));
    }
    //* this is the delete function for the header and content
    public function deleteContentAboutUs(changeablePagesContent $info)
    {
        //* this deletes the data where the id is the same
        $info->delete();
        //* sends the user back to the index page
        return redirect(route('aboutUs.index'));
    }
}
