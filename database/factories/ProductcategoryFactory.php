<?php

namespace Database\Factories;

use Faker\Provider\ar_EG\Text;
use Faker\Provider\de_DE\Text as De_DEText;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productcategory>
 */
class ProductcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(10),
        ];
    }
}
