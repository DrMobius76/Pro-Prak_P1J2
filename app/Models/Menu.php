<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_name',
        'item_price',
        'item_description',
        'item_allergens',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu';
}
