<?php

namespace App\Models;

use App\Http\Controllers\SoepController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class menuItem extends Model
{
    use HasFactory;

    //op alle models fillable variable inuvllen met de database kolommen welke die mag aanpassen (dus alle kolommen)
    protected $fillable = [];

    public function menuItem(): HasMany
    {
        return $this->hasMany(soepgerecht::class);
        return $this->hasMany(voorgerecht::class);
        return $this->hasMany(hoofdgerecht::class);
        return $this->hasMany(nagerecht::class);
    }
}
