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
        for ($i= 0; $i<55;$i++){
            $data[]=[
                'id'=> $i+1,
                'frequency' =>rand(1,2),
                'duration'  =>rand(1,3),
                'targetTop' =>rand(1,2),
                'wishJob'   =>rand(1,2),
                'completeExercise'=>rand(1,3),
                'outCondition' =>rand(1,2),
                'nowSkill' =>'php,sql,javascript',
                'mission' =>'kiem viec lam',
                'userId' =>$i+2,
                'classesId'=>1,
                'status' =>3
            ];
        }
        Course_rqs::insert($data);
    }
}
