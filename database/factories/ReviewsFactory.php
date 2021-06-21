<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Reviews;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ReviewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reviews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $faker = new Faker;
        return [
            'product_id' => function () {
                return Product::all()->random();
            },
            'customer' =>$this->faker->name(),
            'review' => $this->faker->paragraph(),
            'star' => $this->faker->numberBetween(0, 5),
        ];
    }
}
