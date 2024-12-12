<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_accident_history', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Acc_type', 50)->nullable();
            $table->dateTime('Acc_date')->nullable();
            $table->dateTime('Acc_dateentered')->nullable();
            $table->string('Acc_enteredby', 50)->nullable();
            $table->string('App_name', 50)->nullable();
            $table->string('Acc_description', 100)->nullable();
            $table->string('mpp_id', 8)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_accident_history');
    }
};
