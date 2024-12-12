<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_fault', function (Blueprint $table) {
            $table->smallInteger('flt_code')->nullable()->unique('pk_code');
            $table->string('flt_description', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_fault');
    }
};
