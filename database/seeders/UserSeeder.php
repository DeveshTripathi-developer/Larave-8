<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'amit singh',
            'email' => 'amit@gmail.com',
            'password' => Hash::make('1234'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
