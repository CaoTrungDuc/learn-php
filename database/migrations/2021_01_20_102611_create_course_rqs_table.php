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
            $table->bigIncrements('id')->unique();
            $table->tinyInteger('frequency')->nullable();
            $table->integer('duration')->nullable();
            $table->tinyInteger('targetTop')->nullable();
            $table->tinyInteger('wishJob')->nullable();
            $table->tinyInteger('completeExercise')->nullable();
            $table->tinyInteger('outCondition')->nullable();
            $table->string('nowSkill')->nullable();
            $table->string('mission')->nullable();
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
