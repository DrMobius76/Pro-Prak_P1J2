<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HoofdgerechtController extends Controller
{
    public function index()
    {
        $hoofdgerecht = Hoofdgerecht::all();
        return view("menu.menu", ['' => $hoofdgerecht]);
    }
}
