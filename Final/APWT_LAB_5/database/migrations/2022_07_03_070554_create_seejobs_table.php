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
        Schema::create('seejobs', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('subjects');
            $table->string('Day_per_week');
            $table->string('s_gender');
            $table->string('t_gender');
            $table->string('salary');
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
        Schema::dropIfExists('seejobs');
    }
};
