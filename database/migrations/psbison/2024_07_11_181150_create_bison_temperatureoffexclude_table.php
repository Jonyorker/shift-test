<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_temperatureoffexclude', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_number');
            $table->string('trailer_number', 40)->nullable();
            $table->string('emp_id', 10)->nullable();
            $table->dateTime('created_date');
            $table->string('type', 50);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_temperatureoffexclude');
    }
};
