<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyIntakesTable extends Migration
{
    public function up()
    {
        Schema::create('daily_intakes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('target_id')->onDelete('cascade');
            $table->integer('amount');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daily_intakes');
    }
}
