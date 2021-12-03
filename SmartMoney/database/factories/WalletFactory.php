<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WalletFactory extends Factory
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
            'initial_balance'=>$this->faker->randomNumber(5),
            'currency'=>'VNĐ',
            'user_id' =>  $this->faker->randomNumber(2),
        ];
    }
}
