<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('sims_labelfile', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('label_code', 6)->nullable();
            $table->string('label_name', 30)->nullable();
            $table->string('label_definition', 100)->nullable();
            $table->smallInteger('label_active')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('sims_labelfile');
    }
};
