<?php

namespace App\Models;

use App\Models\Option;
use App\Models\Category;
use App\Models\BusinessProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';

    protected $fillable = ['name', 'slug', 'category_id', 'parent_id'];

  


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function parent(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'parent_id');
    }


    public function children(): HasMany
    {
        return $this->hasMany(SubCategory::class, 'parent_id');
    }


    // public function attributes(): MorphMany
    // {
    //     return $this->morphMany(Attribute::class, 'attribute');
    // }

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }


    public function businessProfiles(): BelongsToMany
    {
        return $this->belongsToMany(BusinessProfile::class, 'business_profile_subcategory')
                    ->withPivot('selected_options')
                    ->withTimestamps();
    }


}
