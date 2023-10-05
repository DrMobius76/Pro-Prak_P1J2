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

        return view('reservation.view', compact('information', 'IsOrNotAdmin'));
    }

    public function reservationCreate()
    {
        return view('reservation.create');
    }

    public function reservationStore(Request $request)
    {
        $data = $request->validate([
            'days' => 'required',
            'date' => 'required',
            'time' => 'required',
            'table' => 'required',
            'child_chairs' => 'nullable'
        ]);

        Reservation::create($data);

        return redirect(route('reservation.view'));
    }
}
