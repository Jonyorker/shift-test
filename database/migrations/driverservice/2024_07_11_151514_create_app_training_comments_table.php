<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_training_comments', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('TC_app_id')->nullable();
            $table->string('TC_app_name', 50)->nullable();
            $table->string('TC_user', 50)->nullable();
            $table->dateTime('TC_date')->nullable();
            $table->text('TC_text')->nullable();
            $table->dateTime('TC_editlast')->nullable();
            $table->integer('TC_editcount')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_training_comments');
    }
};
