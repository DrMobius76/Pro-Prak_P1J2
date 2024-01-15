<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeableHomepage extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'pElement1',
        'pElement2',
        'pElement3',
        'pElement4'
    ];
}
