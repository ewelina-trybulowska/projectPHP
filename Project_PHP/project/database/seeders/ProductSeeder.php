<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'brand' => 'Manolo',
            'model' => 'XE334',
            'size' => 39,
            'description' => 'Mega wygodne',
            'amount' => 10000,
            'price' => 1200,

        ]);
        DB::table('products')->insert([
            'brand' => 'Emu',
            'model' => 'AQE3',
            'size' => 35,
            'description' => 'Butki na zime',
            'amount' => 10000,
            'price' => 1200,

        ]);
    }
}
