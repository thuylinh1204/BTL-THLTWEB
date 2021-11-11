<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'birthday'=>$this->faker-> date(),
            'phone' => $this->faker->randomDigit(),
            'address' => $this->faker->address(),
            'photo' => $this->faker->image('public/user', 640, 480, null, false),
        ];
    }
}
