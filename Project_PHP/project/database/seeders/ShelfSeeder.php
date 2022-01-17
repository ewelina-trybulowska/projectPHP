<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shelves')->insert([
            [
                'product_id' => 1,
                'size' =>  39,
                'amount' => 342,
            ],
            [
                'product_id' => 1,
                'size' =>  40,
                'amount' => 25,
            ],
            [
                'product_id' => 2,
                'size' =>  36,
                'amount' => 155,
            ],
            [
                'product_id' => 2,
                'size' =>  38,
                'amount' => 142,
            ],
            [
                'product_id' => 3,
                'size' =>  39,
                'amount' => 0,
            ],
            [
                'product_id' => 4,
                'size' =>  44,
                'amount' => 267,
            ],
            [
                'product_id' => 4,
                'size' =>  45,
                'amount' => 142,
            ],
            [
                'product_id' => 4,
                'size' =>  47,
                'amount' => 50,
            ],
            [
                'product_id' => 5,
                'size' =>  39,
                'amount' => 500,
            ]

        ]);
    }
}
