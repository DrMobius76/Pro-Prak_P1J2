<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class soepgerecht extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'soupName', 'price', 'description', 'ingredients'];

    public function soepgerecht(): BelongsTo
    {
        return $this->belongsTo(menuItem::class); //insert youre lovely model name here you ducking dumbass en
        //in de andere models belong to waar hier : HasMany staat::class);
    }
}
