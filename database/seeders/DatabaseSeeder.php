<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(55)->create();
        $this->call([
////           UserSeeder::class,
////            SubjectsSeeder::class,
//            ClassesSeeder::class,
            CourseRqsSeeder::class
        ]);
    }
}
