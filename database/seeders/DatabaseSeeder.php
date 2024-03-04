<?php

namespace Database\Seeders;

use Database\Seeders\CryptoCurrencySeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CryptoCurrencySeeder::class,
        ]);
    }
}
