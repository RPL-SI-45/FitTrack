<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create('body_mass_indices', function (Blueprint $table) {
            $table->id();
            $table->float('weight');
            $table->float('height');
            $table->integer('age');
            $table->enum('activity_level', ['Minimum', 'Tidak', '1-3x', '3-4x', '6-7x']);
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body_mass_indices');
    }
};
