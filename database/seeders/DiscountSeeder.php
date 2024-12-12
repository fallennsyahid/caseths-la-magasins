<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Discount::create([
            'code' => 'DISKON100',
            'type' => 'fixed',
            'value' => 100,
            'expiry_date' => now()->addDays(30),
        ]);
    }
}
