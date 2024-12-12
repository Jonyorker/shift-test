<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_doclocation', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('doc_Filename', 250)->nullable();
            $table->integer('doc_active')->nullable();
            $table->integer('doc_webID')->nullable();
            $table->dateTime('doc_filedate')->nullable();
            $table->string('doc_updatedby', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_doclocation');
    }
};
