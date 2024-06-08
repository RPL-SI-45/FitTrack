<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToTargetsTable extends Migration
{
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->date('date')->nullable(); // Add the date column
        });
    }

    public function down()
    {
        Schema::dropIfExists('targets');
    }
}
