<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $information = Reservation::indexReservation()->get();

        return view('reservation.index', compact('information'));
    }
}
