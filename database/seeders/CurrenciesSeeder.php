<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesSeeder extends Seeder
{
    public function run()
    {
        Currency::create([
            'code' => 'INR',
            'name' => 'Indian Rupee',
        ]);

        Currency::create([
            'code' => 'EUR',
            'name' => 'Euro',
        ]);

        Currency::create([
            'code' => 'JPY',
            'name' => 'Japanese Yen',
        ]);

        // Add more currencies as needed
    }
}
