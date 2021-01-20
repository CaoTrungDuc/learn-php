<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
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
                'name'=>'C++',
                'avatar'=>'khong co',
                'status'=>2,
                'userId'=>1,
                'subjectId'=>1,
                'created_at'=>now()
            ],
            [
                'id' =>2,
                'name'=>'laravel',
                'avatar'=>'khong co',
                'status'=>1,
                'userId'=>1,
                'subjectId'=>1,
                'created_at'=>now()
            ],
            [
                'id' =>3,
                'name'=>'python',
                'avatar'=>'khong co',
                'status'=>1,
                'userId'=>1,
                'subjectId'=>1,
                'created_at'=>now()
            ],
            [
                'id' =>4,
                'name'=>'C',
                'avatar'=>'khong co',
                'status'=>1,
                'userId'=>1,
                'subjectId'=>1,
                'created_at'=>now()
            ],
            [
                'id' =>5,
                'name'=>'C#',
                'avatar'=>'khong co',
                'status'=>1,
                'userId'=>1,
                'subjectId'=>1,
                'created_at'=>now()
            ],
            [
                'id' =>6,
                'name'=>'javascript',
                'avatar'=>'khong co',
                'status'=>1,
                'userId'=>1,
                'subjectId'=>1,
                'created_at'=>now()
            ]

        ];

        Classes::insert($data);
    }
}
