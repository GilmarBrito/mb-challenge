<?php

namespace Database\Seeders;

use App\Models\CryptoCurrency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CryptoCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CryptoCurrency::truncate();

        $csvFile = fopen(base_path("database/data/crypto_data.csv"), "r");

        $firstLine = true;

        while (($data = fgetcsv($csvFile, 1253, ",")) !== false) {
            if (!$firstLine) {
                CryptoCurrency::create([
                    "code" => $data['0'],
                    "coin_name" => $data['1'],
                    "algorithm" => $data['2'],
                    "is_trading" => $data['3'],
                    "proof_type" => $data['4'],
                    "total_coins_mined" => $data['5'],
                    "total_coin_supply" => $data['6'],
                ]);
            }
            $firstLine = false;
        }

        fclose($csvFile);
    }
}
