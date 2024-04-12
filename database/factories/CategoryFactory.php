<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $nb=2 là 2 từ với kiểu chữ
        $category_name = $this->faker->unique()->words($nb=2, $asText=true);
        $slug = Str::slug($category_name);
        return [
            'category_name' => $category_name,
            'slug' => $slug
        ];
    }
}
