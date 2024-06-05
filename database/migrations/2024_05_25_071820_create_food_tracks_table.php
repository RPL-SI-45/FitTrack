<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_tracks', function (Blueprint $table) {
            $table->id();
            $table->string('food_item');
            $table->enum('meal_time', ['Sarapan', 'Makan Siang', 'Makan Malam']);
            $table->date('meal_date');
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
        Schema::dropIfExists('food_tracks');
    }
}
