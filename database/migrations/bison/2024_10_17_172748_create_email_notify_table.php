<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('bison')->create('email_notify', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address', 800)->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
            $table->text('data')->nullable();
            $table->string('onbehalfof', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('bison')->dropIfExists('email_notify');
    }
};
