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
        $category_id1 = DB::table('categories')->where('name', 'Women')->first()->id;
        $category_id2 = DB::table('categories')->where('name', 'Men')->first()->id;

        DB::table('products')->insert([
            'brand' => 'Lasocki',
            'type' => 'Boots',
            'size' => 37,
            'description' => 'Brown boots for elegant women.',
            'amount' => 10000,
            'price' => 120,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  '/Images/damskie/kozaki1.jpg')->first()->id,

        ]);
        DB::table('products')->insert([
            'brand' => 'Lasocki',
            'type' => 'Boots',
            'size' => 39,
            'description' => 'Brown boots for elegant women.',
            'amount' => 10000,
            'price' => 100,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  '/Images/damskie/kozaki2.jpg')->first()->id,

        ]);
        DB::table('products')->insert([
            'brand' => 'Deezee',
            'type' => 'High-heels',
            'size' => 39,
            'description' => 'Yellow heels for every women.',
            'amount' => 10000,
            'price' => 80,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  '/Images/damskie/szpilki.jpg')->first()->id,

        ]);

        DB::table('products')->insert([
            'brand' => 'Lasocki',
            'type' => 'Elegant',
            'size' => 41,
            'description' => 'Brown elegant shoes for men.',
            'amount' => 10000,
            'price' => 77,
            'category_id' => $category_id2,
            'image_id' => DB::table('images')->where('file_name',  '/Images/meskie/meskie1.jpg')->first()->id,

        ]);

        DB::table('products')->insert([
            'brand' => 'Nike',
            'type' => 'Sneakers',
            'size' => 42,
            'description' => 'Sneakers for men',
            'amount' => 10000,
            'price' => 96,
            'category_id' => $category_id2,
            'image_id' => DB::table('images')->where('file_name',  '/Images/meskie/meskie2.jpg')->first()->id,

        ]);
    }


}

