<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_drivermilesdetail', function (Blueprint $table) {
            $table->string('mpp_id', 8)->nullable();
            $table->dateTime('dm_date')->nullable();
            $table->integer('dm_miles')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_drivermilesdetail');
    }
};
