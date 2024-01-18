<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutUsEdit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'header1',
        'content1',
        'header2',
        'content2',
        'header3',
        'content3',
        'header4',
        'content4'
    ];
}
