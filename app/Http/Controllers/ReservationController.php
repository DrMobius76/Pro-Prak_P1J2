<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservationView()
    {
        $information = Reservation::indexReservation()->get();
        $IsOrNotAdmin = User::IsOrNotAdmin()->get();

        return view('reservation.index', compact('information', 'IsOrNotAdmin'));
    }
}
