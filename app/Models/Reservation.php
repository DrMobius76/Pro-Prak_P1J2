<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'days',
        'date',
        'time',
        'table',
        'child_chairs'
    ];

    public function scopeIndexReservation(Builder $information): void
    {
        $information
            ->select('*')
            ->get();
    }
}
