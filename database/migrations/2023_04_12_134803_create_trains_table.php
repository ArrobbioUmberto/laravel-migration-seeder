<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('factory');
            $table->string('departure station');
            $table->string('arrival station');
            $table->dateTime('departure time');
            $table->dateTime('arrival time');
            $table->tinyInteger('number of coaches');
            $table->tinyInteger('on schedule')->unsigned()->default(1);
            $table->tinyInteger('cancelled');
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
        Schema::dropIfExists('trains');
    }
};
