<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'id' =>1,
                'fullName' =>'Cao Trung Duc',
                'email' => 'anhcomql123@gmail.com',
                'birthday' => 1605691738,
                'phoneNumber' =>'0346196048',
                'job' =>'sinh vien',
                'avatar'=>'https://www.facebook.com/profile.php?id=100012960016321',
                'facebook' =>'https://www.facebook.com/profile.php?id=100012960016321',
                'gender' =>1,
                'country' =>'Nam Dinh',
                'role' =>1,
                'status' =>1,
                'created_at' =>now()

            ],

            [
                'id' =>2,
                'fullName' =>'Nguyen van Dong',
                'email' => 'anhcdomql123@gmail.com',
                'birthday' => 1625691738,
                'phoneNumber' =>'0246196048',
                'job' =>'sinh vien',
                'avatar'=>'https://www.facebook.com/profile.php?id=100012960a016321',
                'facebook' =>'https://www.facebook.com/profile.php?id=100012a960016321',
                'gender' =>1,
                'country' =>'Nam Dinh',
                'role' =>1,
                'status' =>1,
                'created_at' =>now()
            ]

        ];
        User::insert($data);
    }
}
