<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Melon',
                'price' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anggur',
                'price' => 7000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brokoli',
                'price' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabai',
                'price' => 12000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sawi',
                'price' => 4500,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
