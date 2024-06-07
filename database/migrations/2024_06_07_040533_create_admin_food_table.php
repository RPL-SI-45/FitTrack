<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_food', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan_utama');
            $table->integer('kalori_utama');
            $table->string('nama_makanan_ringan');
            $table->integer('kalori_ringan');
            $table->string('nama_minuman');
            $table->integer('kalori_minuman');
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
