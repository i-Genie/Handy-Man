<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessProfile;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Attribute;
use App\Models\User; // Import the User model
use Faker\Factory as Faker;

class BusinessProfileSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Fetch the single user from the database
        $user = User::first(); // Assuming there's only one user

        // Fetch a random category
        $category = Category::inRandomOrder()->first();

        // Fetch a random subcategory for the selected category
        $subcategory = $category->subcategories()->inRandomOrder()->first();

        // Create a single business profile using the single user
        $businessProfile = BusinessProfile::create([
            'user_id' => $user->id, // Use the ID of the single user
            'category_id' => $category->id,
            'subcategory_id' => $subcategory->id,
            'business_name' => $faker->company,
            'business_description' => $faker->sentence(10),
            'business_hours' => [
                'Monday' => '9am - 5pm',
                'Tuesday' => '9am - 5pm',
                'Wednesday' => '9am - 5pm',
                'Thursday' => '9am - 5pm',
                'Friday' => '9am - 5pm',
            ],
            'business_image' => 'default_business_image.jpg', // Placeholder image
            'website' => $faker->url,
            'phone_number' => $faker->phoneNumber,
            'email' => $faker->unique()->safeEmail,
            'is_verified' => $faker->boolean,
        ]);

        // Fetch attributes for the selected category
        $categoryAttributes = Attribute::where('attributable_type', Category::class)
            ->where('attributable_id', $category->id)
            ->get();

        // Fetch attributes for the selected subcategory
        $subcategoryAttributes = Attribute::where('attributable_type', Subcategory::class)
            ->where('attributable_id', $subcategory->id)
            ->get();

        // Combine both category and subcategory attributes
        $allAttributes = $categoryAttributes->merge($subcategoryAttributes);

        foreach ($allAttributes as $attribute) {
            // Check if the attribute is multiselect
            if ($attribute->is_multiselect) {
                // Randomly select multiple options for the attribute
                $selectedOptions = $attribute->options->random($faker->numberBetween(1, $attribute->options->count()))->pluck('id')->toArray();
            } else {
                // Select a single option for the attribute
                $selectedOptions = [$attribute->options->random()->id];
            }
        
            // Attach the attribute with selected options
            $businessProfile->attributes()->attach($attribute->id, [
                'selected_options' => json_encode($selectedOptions) // Store selected options as JSON
            ]);
        }
    }
}