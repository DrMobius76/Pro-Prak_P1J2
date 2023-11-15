<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class menuItems extends Model
{
    use HasFactory;

    protected $fillable = [] ;
    
    public function menuItems() : HasMany {
        return $this->hasMany(//insert youre lovely model name here you ducking dumbass en
            //in de andere models belong to waar hier : HasMany staat::class);
    }
}
