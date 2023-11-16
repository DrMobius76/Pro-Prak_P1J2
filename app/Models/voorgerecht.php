<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class voorgerecht extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function voorgerecht(): BelongsTo
    {
        return $this->BelongsTo(menuItem::class); //insert youre lovely model name here you ducking dumbass en
        //in de andere models belong to waar hier : BelongsTo staat::class);
    }
}
