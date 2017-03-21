<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('source')->nullable();

            $table->string('calc')->nullable();

            $table->string('nar')->nullable();
            $table->string('vn')->nullable();
            $table->string('kol')->nullable();
            $table->string('davl')->nullable();
            $table->string('dlina')->nullable();
            $table->string('dym')->nullable();
            $table->string('kotel')->nullable();

            $table->string('ob')->nullable();
            $table->string('op1')->nullable();
            $table->string('op2')->nullable();
            $table->string('op3')->nullable();
            $table->string('op4')->nullable();
            $table->string('op5')->nullable();
            $table->string('op6')->nullable();
            $table->string('op7')->nullable();
            $table->string('op8')->nullable();
            $table->string('op9')->nullable();
            $table->string('op10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
