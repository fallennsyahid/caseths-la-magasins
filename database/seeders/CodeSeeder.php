<?php

namespace Database\Seeders;

use App\Models\Code;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Code::create([
            'code' => 'CASETHSKECE',
            'discount_percentage' => 20.00,
            'expiry_date' => now()->addMonths(1),
            'is_active' => true,
        ]);
    }
}
