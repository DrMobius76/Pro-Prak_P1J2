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

    public function reservationEdit(Reservation $info)
    {
        // dd($info);
        return view('reservation.edit', compact('info'));
    }

    public function reservationUpdate(Reservation $info, Request $request)
    {
        $data = $request->validate([
            'days' => 'required',
            'date' => 'required',
            'time' => 'required',
            'table' => 'required',
            'child_chairs' => 'nullable'
        ]);

        $info->update($data);

        return redirect(route('reservation.view'));
    }

    public function reservationDelete(Reservation $info)
    {
        $info->delete();

        return redirect(route('reservation.view'));
    }
}
