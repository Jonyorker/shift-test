<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('safescore_category', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('ActivityCode', 10)->nullable();
            $table->string('ActivityType', 10)->nullable();
            $table->float('Value', 53, 0)->nullable();
            $table->float('DurationYears', 53, 0)->nullable();
            $table->string('Category', 20)->nullable();
            $table->string('Display', 1)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('safescore_category');
    }
};
