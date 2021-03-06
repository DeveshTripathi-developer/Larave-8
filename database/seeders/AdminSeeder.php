<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_login')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(1234),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
