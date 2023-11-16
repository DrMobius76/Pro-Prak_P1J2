<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoorgerechtController extends Controller
{
    public function index()
    {
        $voorgerecht = Voorgerecht::all();
        return view("menu.menu", ['' => $voorgerecht]);
    }
}
