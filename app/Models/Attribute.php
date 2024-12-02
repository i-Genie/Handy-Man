<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        "attributabe_id",
        "attributabe_type",
        "name",
        'is_multiselect'
    ];

    public function attribute(): MorphTo
    {
        return $this->morphTo();
    }

    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }
    // public function options(): MorphMany
    // {
    //     return $this->morphMany(Option::class, 'optionable');
    // }

    public function businessProfiles()
    {
        return $this->belongsToMany(BusinessProfile::class, 'business_profile_attributes')
                    ->withPivot('selected_options')
                    ->withTimestamps();
    }
    
}
