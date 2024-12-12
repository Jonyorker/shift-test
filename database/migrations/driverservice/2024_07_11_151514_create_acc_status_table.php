<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_status', function (Blueprint $table) {
            $table->integer('acc_id')->nullable()->index('dk_id');
            $table->string('usr_id', 20)->nullable();
            $table->string('acc_ntid', 20)->nullable();
            $table->string('acc_status', 10)->nullable();
            $table->dateTime('acc_statusdate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_status');
    }
};
