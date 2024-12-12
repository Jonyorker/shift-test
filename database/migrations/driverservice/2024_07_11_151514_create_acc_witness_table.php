<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_witness', function (Blueprint $table) {
            $table->integer('acc_id')->nullable();
            $table->integer('wit_id')->nullable();
            $table->string('wit_name', 50)->nullable();
            $table->string('wit_address', 50)->nullable();
            $table->string('wit_phone', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_witness');
    }
};
