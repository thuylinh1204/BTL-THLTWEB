<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'wallet_id'=>$this->faker->randomNumber(3),
            'amount'=>$this->faker->randomNumber(5),
            'currency'=>'VNĐ',
            'recurrence'=> rand(0, 1) ? '1 week' : '1 month',
            'end_date'=>$this->faker->date(),
            'reminder'=> Str::random(10),
            'date'=>$this->faker->date(),
            'note'=> Str::random(40),
            'photo' => $this->faker->image('public/user/transaction', 640, 480, null, false),
        ];
    }
}
