<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NagerechtController extends Controller
{
    public function index()
    {
        $nagerecht = Nagerecht::all();
        return view("menu.menu", ['' => $nagerecht]);
    }
}
