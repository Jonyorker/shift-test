<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('bison_TargetLogMiles', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('type3', 6)->nullable();
            $table->integer('targetMiles')->nullable();
            $table->integer('targetLog')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('bison_TargetLogMiles');
    }
};
