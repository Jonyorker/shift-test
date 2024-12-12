<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_webid_email_link', function (Blueprint $table) {
            $table->increments('id');
            $table->string('drvapp_email', 80)->nullable();
            $table->integer('drvapp_webID')->nullable();
            $table->dateTime('webID_created')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_webid_email_link');
    }
};
