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
        Schema::create('body_mass_indices', function (Blueprint $table) {
            $table->id();
            $table->float('weight', 5, 2);
            $table->float('height', 5, 2);
            $table->integer('age');
            $table->enum('activity_level', ['Minimum', 'Tidak', '1-3x', '3-4x', '6-7x']);
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_mass_indices');
    }
};
