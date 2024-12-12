<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('dtproperties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('objectid')->nullable();
            $table->string('property', 64);
            $table->string('value')->nullable();
            $table->binary('lvalue')->nullable();
            $table->integer('version');
            $table->string('uvalue')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('dtproperties');
    }
};
