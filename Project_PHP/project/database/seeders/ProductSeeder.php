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
            'brand' => 'CCC',
            'model' => 'kozaki',
            'description' => 'Brązowe kozaki za kolano',
            'price' => 120,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  '/Images/damskie/kozaki1.jpg')->first()->id,

        ]);
        DB::table('products')->insert([
            'brand' => 'CCC',
            'model' => 'kozaki',
            'description' => 'Brązkowe kozaki za kostkę',
            'price' => 100,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  '/Images/damskie/kozaki2.jpg')->first()->id,

        ]);
        DB::table('products')->insert([
            'brand' => 'CCC',
            'model' => 'szpilki',
            'description' => 'Żółte szpilki',
            'price' => 80,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  '/Images/damskie/szpilki.jpg')->first()->id,

        ]);

        DB::table('products')->insert([
            'brand' => 'CCC',
            'model' => 'pantofle',
            'description' => 'Brązowe pantofle',
            'price' => 77,
            'category_id' => $category_id2,
            'image_id' => DB::table('images')->where('file_name',  '/Images/meskie/meskie1.jpg')->first()->id,

        ]);

        DB::table('products')->insert([
            'brand' => 'CCC',
            'model' => 'trampki',
            'description' => 'Buty sportowe',
            'price' => 96,
            'category_id' => $category_id2,
            'image_id' => DB::table('images')->where('file_name',  '/Images/meskie/meskie2.jpg')->first()->id,

        ]);
    }


}

