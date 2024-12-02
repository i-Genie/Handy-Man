<?php

namespace App\Models;

use App\Models\Attribute;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use App\Models\BusinessProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug',  'description'];


    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }


    // public function attributes(): MorphMany
    // {
    //     return $this->morphMany(Attribute::class, 'attribute');
    // }

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'attributable_id');
    }


    public function businessProfiles(): BelongsToMany
    {
        return $this->belongsToMany(BusinessProfile::class, 'business_profile_subcategory', 'subcategory_id', 'business_profile_id')
                    ->withPivot('selected_options')
                    ->withTimestamps();
    }
   
}
