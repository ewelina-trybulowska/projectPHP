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
        $category_id1=DB::table('categories')->where('name','Women')->first()->id;
        $category_id2=DB::table('categories')->where('name','Men')->first()->id;

        DB::table('products')->insert([
            'brand' => 'Manolo',
            'model' => 'XE334',
            'size' => 39,
            'description' => 'Mega wygodne',
            'amount' => 10000,
            'price' => 1200,
            'category_id'=>$category_id1,

        ]);
        DB::table('products')->insert([
            'brand' => 'Emu',
            'model' => 'AQE3',
            'size' => 35,
            'description' => 'Butki na zime',
            'amount' => 10000,
            'price' => 1200,
            'category_id'=>$category_id2,

        ]);

        DB::table('products')->insert([
            'brand' => 'Emu',
            'model' => 'AQE3',
            'size' => 35,
            'description' => 'Butki na zime',
            'amount' => 10000,
            'price' => 1200,
            'category_id'=>$category_id2,

        ]);
        DB::table('products')->insert([
            'brand' => 'Emu',
            'model' => 'AQE3',
            'size' => 35,
            'description' => 'Butki na zime',
            'amount' => 10000,
            'price' => 1200,
            'category_id'=>$category_id2,

        ]);

        DB::table('products')->insert([
            'brand' => 'Emu',
            'model' => 'AQE3',
            'size' => 35,
            'description' => 'Butki na zime',
            'amount' => 10000,
            'price' => 1200,
            'category_id'=>$category_id2,

        ]);

        DB::table('products')->insert([
            'brand' => 'Emu',
            'model' => 'AQE3',
            'size' => 35,
            'description' => 'Butki na zime',
            'amount' => 10000,
            'price' => 1200,
            'category_id'=>$category_id2,

        ]);
    }
}
