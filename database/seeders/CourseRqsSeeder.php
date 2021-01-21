<?php

namespace Database\Seeders;

use App\Models\Course_rqs;
use Illuminate\Database\Seeder;

class CourseRqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[];
        $data_time_duration = [5400,7200,9000];
        $data_skill =["Php,laravel,C++","React,Python,C","JavaScript,Golang,Java"];
        for ($i= 0; $i<55;$i++){
            $data[]=[
                'id'=> $i+1,
                'frequency' =>rand(1,3),
                'duration'  =>$data_time_duration[rand(0,2)],
                'targetTop' =>rand(1,3),
                'wishJob'   =>rand(1,3),
                'completeExercise'=>rand(1,3),
                'outCondition' =>rand(1,3),
                'nowSkill' =>$data_skill[rand(0,2)],
                'mission' =>'se cham chi',
                'userId' =>$i+2,
                'classesId'=>rand(2,6),
                'status' =>3,
                'created_at'=>now()
            ];
        }
        Course_rqs::insert($data);
    }
}
