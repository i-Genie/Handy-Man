<?php

namespace App\Models;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "name",
        "phonecode"
    ];

    public function states(): HasMany
    {
        return $this->hasMany(related: State::class);
    }

   
}
