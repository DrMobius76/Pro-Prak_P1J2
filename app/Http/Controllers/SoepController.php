<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoepController extends Controller
{
    public function index()
    {
        $soep = Soep::all();
        return view("menu.menu", ['' => $soep]);
    }
}
