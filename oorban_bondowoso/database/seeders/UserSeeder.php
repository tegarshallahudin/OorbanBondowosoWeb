<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password='admin';
        DB::table('users')->insert([
            'name' => 'tegar',
            'username' => 'admin',
            'email' => 'tegarshallahudin@gmail.com',
            'password' => Hash::make($password),
            'alamat' => 'pasuruan',
            'no_hp' => '081234859123',
            'level' => 'super_admin',
        ]);
    }
}
