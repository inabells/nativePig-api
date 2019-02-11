<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pig', function (Blueprint $table) {
            $table->increments('pig_id');
            $table->string('pig_registration_id');
            $table->string('pig_classification');
            $table->string('pig_earnotch')
            $table->string('pig_sex');
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
        Schema::dropIfExists('pig');
    }
}
