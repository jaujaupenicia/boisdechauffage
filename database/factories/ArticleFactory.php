<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Creation des articles
            'nom' => fake()->name(),
            'description' => fake()->text(150),
            'prix' => floatval(fake()->numberBetween(10, 2500)),
            'en_promo' => fake()->boolean(30),
            'stock_dispo' => fake()->numberBetween(0, 100),
            'prix_promo' => floatval(fake()->numberBetween(10, 500)),
            'image_article' => "img/e-chauffage-img/produit-".rand(1, 45).".jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
