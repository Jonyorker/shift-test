<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_Hidden_WebApplicants', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('WebID')->nullable();
            $table->string('HiddenBy', 100)->nullable();
            $table->dateTime('HiddenOn')->nullable();
            $table->string('Status', 8)->nullable();
            $table->string('Comment', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_Hidden_WebApplicants');
    }
};
