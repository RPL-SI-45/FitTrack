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
<<<<<<<< HEAD:database/migrations/2024_05_09_115231_create_foodtrack.php
        Schema::create('foodtrack', function (Blueprint $table) {
            $table->id();
========
        Schema::create('login_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
>>>>>>>> c252763f213ebff2f58c94af72d2432e7f954551:database/migrations/2024_04_16_095520_create_login_tabel.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2024_05_09_115231_create_foodtrack.php
        Schema::dropIfExists('foodtrack');
========
        Schema::dropIfExists('login_tabel');
>>>>>>>> c252763f213ebff2f58c94af72d2432e7f954551:database/migrations/2024_04_16_095520_create_login_tabel.php
    }
};
