<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
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
        return [

            'title'=>  Str::random(10),
            'type' =>    rand(0, 1) ? 'Income' : 'Outcome',

        ];
    }
}