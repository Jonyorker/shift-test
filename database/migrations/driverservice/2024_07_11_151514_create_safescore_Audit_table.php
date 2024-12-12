<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('safescore_Audit', function (Blueprint $table) {
            $table->string('mpp_id', 8)->nullable();
            $table->string('mpp_terminal', 6)->nullable();
            $table->string('mpp_firstname', 40)->nullable();
            $table->string('mpp_lastname', 40)->nullable();
            $table->dateTime('mpp_hiredate')->nullable();
            $table->decimal('Risk', 19, 4)->nullable();
            $table->dateTime('NewReviewDate')->nullable();
            $table->dateTime('AnnualReviewDate')->nullable();
            $table->dateTime('AccidentDate')->nullable();
            $table->dateTime('HighriskDate')->nullable();
            $table->dateTime('RequestDate')->nullable();
            $table->dateTime('VoradDate')->nullable();
            $table->tinyInteger('iNetPerformanceFlag')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('safescore_Audit');
    }
};
