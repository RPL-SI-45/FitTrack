<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foodtracks', function (Blueprint $table) {
            $table->integer('id_catatan_makan');
            $table->integer('id_pengguna');
            $table->integer('id_makanan');
            $table->date('tanggal_makan');
            $table->integer('jumlah_porsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodtracks');
    }
};
