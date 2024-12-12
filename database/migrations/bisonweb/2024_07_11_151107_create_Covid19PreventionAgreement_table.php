<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('Covid19PreventionAgreement', function (Blueprint $table) {
            $table->string('Time')->nullable();
            $table->string('EmployeeID')->nullable();
            $table->string('Name (First)')->nullable();
            $table->string('Name (Last)')->nullable();
            $table->string('Signature')->nullable();
            $table->string('Browser')->nullable();
            $table->string('IP Address')->nullable();
            $table->string('Unique ID')->nullable();
            $table->string('Location')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('Covid19PreventionAgreement');
    }
};
