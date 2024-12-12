<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_comment_summary', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('app_name', 50)->nullable();
            $table->dateTime('commentdate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_comment_summary');
    }
};
