<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_id = DB::table('roles')->where('name','Admin')->first()->id;
        $user_id = DB::table('roles')->where('name','User')->first()->id;

        DB::table('users')->insert([
            [
                'username' => 'John_Doe',
                'firstname'=>'John',
                'surname'=>'Doe',
                'phone'=>'987654321',
                'email' =>'john.doe@gmail.com',
                'password' => bcrypt('secret'),
                'role_id' => $admin_id
            ],
            [
                'username' => 'Mary_Doe',
                'firstname'=>'Mary',
                'surname'=>'Doe',
                'phone'=>'777654321',
                'email' =>'mary.doe@gmail.com',
                'password' => bcrypt('secret'),
                'role_id' => $user_id
            ]

        ]);

    }
}
