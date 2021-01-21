<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('fullName',50);
            $table->string('email',128)->unique();
            $table->integer('birthday')->nullable();
            $table->string('phoneNumber')->unique()->nullable();
            $table->string('job')->nullable();
            $table->string('avatar')->unique()->nullable();
            $table->string('facebook')->unique()->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('country')->nullable();
            $table->tinyInteger('role')->nullable();
//           value =1 => admin ;value =2 =>user_course
            $table->tinyInteger('status')->default(4);
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
        Schema::dropIfExists('users');
    }
}
