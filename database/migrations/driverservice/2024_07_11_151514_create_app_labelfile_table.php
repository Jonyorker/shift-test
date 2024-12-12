<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_labelfile', function (Blueprint $table) {
            $table->string('lbl_type', 15)->nullable();
            $table->string('lbl_code', 50)->nullable();
            $table->tinyInteger('lbl_readonly')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_labelfile');
    }
};
