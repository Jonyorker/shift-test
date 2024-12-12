<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_labelfile', function (Blueprint $table) {
            $table->string('lbl_type', 20)->nullable()->index('dk_type');
            $table->string('lbl_code', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_labelfile');
    }
};
