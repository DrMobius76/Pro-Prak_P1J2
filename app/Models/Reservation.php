<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

//* a model needs this to function properly
class Reservation extends Model
{
    //* this is used for testing with test-data
    use HasFactory;
    //* this variable says that the laravel code can change only these columns in the database
    protected $fillable = [
        //* this is the days column in the database
        'days',
        //* this is the date column
        'date',
        //* this is the time column
        'time',
        //* this is the table column
        'table',
        //* this is the child_chairs column
        'child_chairs'
    ];
    //* this function gets all the information from the reservation table and saves the data in the parameters of the function
    public function scopeIndexReservation(Builder $information): void
    {
        //* everything that you get from the database is saved in this variable
        $information
            //* this selects everything from the reservation table
            ->select('*')
            //* this will get the information that you selected above
            ->get();
    }
}
