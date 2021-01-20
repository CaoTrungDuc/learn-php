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
                'avatar'=>'khong co',
                'facebook' =>'khong co',
                'gender' =>'nam',
                'country' =>'Nam dinh',
                'role' =>'admin',
                'status' =>1

            ],

            [
                'id' =>2,
                'fullName' =>'Nguyen van Dong',
                'email' => 'anhcdomql123@gmail.com',
                'birthday' => 1625691738,
                'phoneNumber' =>'0246196048',
                'job' =>'sinh vaien',
                'avatar'=>'khonga co',
                'facebook' =>'kahong co',
                'gender' =>'nam',
                'country' =>'Nam dinh',
                'role' =>'admin',
                'status' =>1

            ]

        ];
        User::insert($data);
    }
}
