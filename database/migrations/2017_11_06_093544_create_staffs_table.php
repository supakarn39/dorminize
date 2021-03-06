<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('ssn');
            $table->string('name');
            $table->string('position');
            $table->string('gender');
            $table->string('work_hour');
            $table->string('phone_number');
            $table->integer('salary');
            $table->timestamps();
            $table->integer('dorm_id')->unsigned();

            $table->primary('ssn');
            $table->foreign('dorm_id')->references('id')->on('dorms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
