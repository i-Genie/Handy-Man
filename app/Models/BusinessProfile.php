<?php

namespace App\Models;

use App\Models\Attribute;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;


class BusinessProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'subcategory_id',
        'business_name',
        'business_description',
        'business_hours',
        'business_image',
        'payment_methods',
        'website',
        'phone_number',
        'email',
        'is_verified',
    ];


    protected $casts = [
        'business_hours' => 'array',
        'payment_methods' => 'array',
        'is_verified' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    // public function subcategories(): BelongsToMany
    // {
    //     return $this->belongsToMany(SubCategory::class, 'businessprofile_subcategories','business_profile_id','subcategory_id')
    //                 ->withPivot('selected_options')
    //                 ->withTimestamps();
    // }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class, 'businessprofile_attributes','business_profile_id', 'attribute_id')
                    ->withPivot('selected_options')
                    ->withTimestamps();
    }

    public function getValidatedSubcategoryOptions($subcategoryId)
    {
        $pivotData = $this->subcategories()->where('subcategories.id', $subcategoryId)->first()->pivot;
        $selectedIds = json_decode($pivotData->selected_options, true);
        
        return Option::whereIn('id', $selectedIds)
            ->where('optionable_type', Subcategory::class)
            ->where('optionable_id', $subcategoryId)
            ->pluck('name', 'id');
    }

    public function getValidatedAttributeOptions($attributeId)
    {
        $pivotData = $this->attributes()->where('attributes.id', $attributeId)->first()->pivot;
        $selectedIds = json_decode($pivotData->selected_options, true);
        
        return Option::whereIn('id', $selectedIds)
            ->where('optionable_type', Attribute::class)
            ->where('optionable_id', $attributeId)
            ->pluck('name', 'id');
    }


    public function business_image_url()
    {
        return $this->business_image 
            ? Storage::disk('business_images')->url($this->business_image)
            : '';
    }
}
