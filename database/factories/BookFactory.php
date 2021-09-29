<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   

        return [
            'author_id' => rand(1, 10),
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(1280, 720),
            'published_year' => $this->faker->year(),
            'ISBN' => $this->faker->isbn10()
        ];
    }
}
