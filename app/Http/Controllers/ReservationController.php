<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //* this function shows the information for the view page
    public function reservationView()
    {
        //* this variable contains the information of all the reservations from a function in the model
        $information = Reservation::indexReservation()->get();

        //* this sends $information with all the reservation info to the view page
        return view('reservation.view', compact('information'));
    }

    //* this function is used to show the information to the create page
    public function reservationCreate()
    {
        //* sends the information to the create page
        return view('reservation.create');
    }

    //* this function is used when the user clicks on create to make a reservation
    //* the request gets the information from the create page when the form is send
    public function reservationStore(Request $request)
    {
        //* this stores all the request information in 1 variable and validates them
        $data = $request->validate([
            'days' => 'required',
            'date' => 'required',
            'time' => 'required',
            'table' => 'required',
            'child_chairs' => 'nullable',
            'people' => 'required'
        ]);

        //* this make a reservation in the reservation table with the data from $data that got send from the form
        Reservation::create($data);

        //* sends the user back to the view page
        return redirect(route('reservation.view'));
    }

    //* this function shows the form information for the reservation that the user clicked on
    public function reservationEdit(Reservation $info)
    {
        // dd($info);
        //* this returns the information for the edit page
        return view('reservation.edit', compact('info'));
    }

    //* this function updates the information that has been send by the user
    public function reservationUpdate(Reservation $info, Request $request)
    {
        //* validates the data from the form with all the columns
        $data = $request->validate([
            'days' => 'required',
            'date' => 'required',
            'time' => 'required',
            'table' => 'required',
            'child_chairs' => 'nullable',
            'people' => 'required'
        ]);

        //* updates the row that the user selected with the data that the user send with the form
        $info->update($data);

        //* sends the user to the view page
        return redirect(route('reservation.view'));
    }

    //* this function removes reservations from the database
    public function reservationDelete(Reservation $info)
    {
        //* this deletes the reservation that the user clicked on
        $info->delete();

        //* sends the user directly to the view page
        return redirect(route('reservation.view'));
    }
}
