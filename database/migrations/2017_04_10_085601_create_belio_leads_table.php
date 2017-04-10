<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelioLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belio_leads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("source")->nullable();
            $table->text("address")->nullable();
            $table->string("size")->nullable();
            $table->string("color")->nullable();
            $table->string("paided")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belio_leads');
    }
}
