<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'fullName' => 'Huong Mai',
            'email' => 'maithimyhuongfpt@gmail.com',
            'phoneNumber'=>'0374159906',
            'password' => Hash::make('admin123'),
        ]);
    }
}
