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
        DB::table('users')->insert(
            [
                'fullName' => 'Huong Mai',
                'email' => 'maithimyhuongfpt@gmail.com',
                'avatar' => 'uploads/users/avt.png',
                'aboutMe' => '"Nhạt"',
                'facebookContact' => 'https://www.facebook.com/mtmhuong.2001',
                'phoneNumber' => '0374159906',
                'password' => Hash::make('admin123'),
            ],
        );

        DB::table('users')->insert(
            [
                'fullName' => 'Duc Huy',
                'email' => 'voduchuy2001@gmail.com',
                'avatar' => 'uploads/users/avt.png',
                'aboutMe' => '"Cần cù bù siêng năng"',
                'facebookContact' => 'https://www.facebook.com/VDH.me',
                'phoneNumber' => '0962785101',
                'password' => Hash::make('admin123'),
            ]
        );


        DB::table('users')->insert(
            [
                'fullName' => 'Huong Mai',
                'email' => 'mtmhuong06@gmail.com',
                'avatar' => 'uploads/users/avt.png',
                'aboutMe' => '"Nhạt"',
                'facebookContact' => 'https://www.facebook.com/mtmhuong.2001',
                'phoneNumber' => '0374159906',
                'password' => Hash::make('admin123'),
            ],
        );
    }
}
