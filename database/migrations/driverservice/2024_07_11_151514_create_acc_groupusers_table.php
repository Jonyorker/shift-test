<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_groupusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grp_name', 20)->nullable();
            $table->string('us_username', 30)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_groupusers');
    }
};
