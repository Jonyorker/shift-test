<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('DIMS_AutoUtilization', function (Blueprint $table) {
            $table->string('Fleet_ID', 6)->nullable();
            $table->tinyInteger('Active')->nullable();
            $table->float('Cutoff', 53, 0)->nullable();
            $table->date('Start_Date')->nullable();
            $table->date('End_Date')->nullable();
            $table->increments('ID');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('DIMS_AutoUtilization');
    }
};
