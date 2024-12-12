<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cartage_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id', 10)->nullable();
            $table->string('phone_number')->nullable()->index('ix_phonenumber');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->tinyInteger('is_active');
            $table->string('first_name', 30)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('fleet', 4)->nullable();
            $table->string('car_id', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cartage_users');
    }
};
