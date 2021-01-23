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
                'fullName' =>'Cao Trung Đức',
                'email' => 'anhcomql123@gmail.com',
                'birthday' => 919012860,
                'phoneNumber' =>'0346196048',
                'job' =>'Sinh viên',
                'avatar'=>'https://scontent.fhan2-5.fna.fbcdn.net/v/t1.0-9/50337639_615601248881870_8805327373693091840_n.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_ohc=HnLu8uEe4-kAX_-PbEM&_nc_ht=scontent.fhan2-5.fna&oh=a66d67ddcfbfd25bd174fd7f590e64fc&oe=60304D6F',
                'facebook' =>'https://www.facebook.com/profile.php?id=100012960016321',
                'gender' =>1,
                'country' =>'Nam Định',
                'role' =>1,
                'status' =>1,
                'created_at' =>now()

            ],

            [
                'id' =>2,
                'fullName' =>'Nguyễn Văn Đông',
                'email' => 'anhdongql123@gmail.com',
                'birthday' => 1625691738,
                'phoneNumber' =>'0246196048',
                'job' =>'Sinh viên',
                'avatar'=>'https://www.w3schools.com/w3images/avatar5.png',
                'facebook' =>'https://www.facebook.com/profile.php?id=100012a960016321',
                'gender' =>1,
                'country' =>'Nam Định',
                'role' =>1,
                'status' =>1,
                'created_at' =>now()
            ]

        ];
        User::insert($data);
    }
}
