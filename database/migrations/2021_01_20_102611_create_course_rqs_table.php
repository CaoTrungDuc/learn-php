<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_rqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('frequency');
            $table->integer('duration');
            $table->integer('targetTop');
            $table->integer('wishJob');
            $table->integer('completeExercise');
            $table->integer('outCondition');
            $table->string('nowSkill');
            $table->string('mission');
            $table->foreignId('userId')->constrained('users');
            $table->foreignId('classesId')->constrained('classes');
            $table->integer('status')->default(3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_rqs');
    }
}
