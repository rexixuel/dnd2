<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTofAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tof_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('answer');
            $table->integer('tof_id')->unsigned();
            $table->boolean('correct')->default(false);
            $table->foreign('tof_id')->references('id')->on('tofs')->onDelete('cascade');
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
        Schema::dropIfExists('tof_answers');
    }
}
