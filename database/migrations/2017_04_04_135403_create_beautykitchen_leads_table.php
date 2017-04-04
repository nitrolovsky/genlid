<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeautykitchenLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beautykitchen_leads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("source")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beautykitchen_leads');
    }
}
