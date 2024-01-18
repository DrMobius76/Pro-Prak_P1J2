<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class changeablePagesContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'content'
    ];
}
