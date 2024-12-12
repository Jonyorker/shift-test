<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_injuries', function (Blueprint $table) {
            $table->integer('acc_id')->nullable();
            $table->integer('inj_id')->nullable();
            $table->string('inj_name', 50)->nullable();
            $table->string('inj_severity', 10)->nullable();
            $table->string('inj_seatbelt', 10)->nullable();
            $table->string('inj_hospital', 50)->nullable();
            $table->string('inj_hospitalcity', 50)->nullable();
            $table->string('inj_hospitalprov', 2)->nullable();
            $table->string('inj_hospitalphone', 30)->nullable();
            $table->text('inj_details')->nullable();
            $table->string('inj_drugtesting', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_injuries');
    }
};
