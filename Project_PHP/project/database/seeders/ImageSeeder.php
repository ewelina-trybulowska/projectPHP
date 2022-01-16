<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['file_name' => '/Images/damskie/kozaki1.jpg'],
            ['file_name' => '/Images/damskie/kozaki2.jpg'],
            ['file_name' => '/Images/damskie/szpilki.jpg'],
            ['file_name' => '/Images/meskie/meskie1.jpg'],
            ['file_name' => '/Images/meskie/meskie2.jpg'],

        ]);
    }
}
