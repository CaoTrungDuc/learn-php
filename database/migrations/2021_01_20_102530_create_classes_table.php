<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name')->unique();
            $table->longText('avatar',16000)->nullable();
            $table->integer('status')->default(CLASS_STATUS);
            $table->foreignId('userId')->constrained('users');
            $table->foreignId('subjectId')->constrained('subjects');
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
        Schema::dropIfExists('classes');
    }
}
