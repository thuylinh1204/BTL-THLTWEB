<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BudgetSeeder::class);
        $this->call(WalletSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(LabelSeeder::class);
    }
}
