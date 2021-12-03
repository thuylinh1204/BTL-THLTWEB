<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'amount'=>$this->faker->randomNumber(5),
            'currency'=>'VNĐ',
            'recurrence'=> rand(0, 1) ? '1 week' : '1 month',
            'start_date'=>$this->faker->date(),
            'reminder'=> Str::random(10),
            'end_date'=>$this->faker->date(),
            'user_id'=>$this->faker->randomNumber(2),
        ];
    }
}
