<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['日常用品', '飲料', '鮮食', '麵包', '冰品'];
        return [
            'name' => $this -> faker -> unique()->randomElement($categories),
        ];
    }
}
