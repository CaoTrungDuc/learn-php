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
            $table->string('email')->unique();
            $table->integer('birthday')->nullable();
            $table->string('phoneNumber')->unique()->nullable();
            $table->string('job')->nullable();
            $table->longText('avatar')->nullable();
            $table->string('facebook')->unique()->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('country')->nullable();
            $table->tinyInteger('role')->nullable();
//           value =1 => admin ;value =2 =>user_course
            $table->tinyInteger('status')->default(USER_STATUS);
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
