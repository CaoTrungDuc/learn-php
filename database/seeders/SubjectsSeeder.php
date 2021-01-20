<?php

namespace Database\Seeders;

use App\Models\Subjects;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'=> 1,
                'name' =>'mon thu nhat',
                'description' =>'khong co',
                'avatar' =>'khong co',
                'status' =>1,
                'userId' =>1,
                'created_at'=>now()
            ],
            [
                'id'=> 2,
                'name' =>'mon thu hai',
                'description' =>'khong co',
                'avatar' =>'khong co',
                'status' =>1,
                'userId' =>1,
                'created_at'=>now()
            ],
            [
                'id'=> 3,
                'name' =>'mon thu ba',
                'description' =>'khong co',
                'avatar' =>'khong co',
                'status' =>1,
                'userId' =>1,
                'created_at'=>now()
            ],
            [
                'id'=> 4,
                'name' =>'mon thu tu',
                'description' =>'khong co',
                'avatar' =>'khong co',
                'status' =>1,
                'userId' =>1,
                'created_at'=>now()
            ],
            [
                'id'=> 5,
                'name' =>'mon thu nam',
                'description' =>'khong co',
                'avatar' =>'khong co',
                'status' =>1,
                'userId' =>1,
                'created_at'=>now()
            ]
        ];
        Subjects::insert($data);
    }
}
