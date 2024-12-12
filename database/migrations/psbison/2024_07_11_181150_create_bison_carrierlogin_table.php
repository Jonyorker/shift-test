<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_carrierlogin', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('userID', 20)->nullable();
            $table->string('Password', 50)->nullable();
            $table->string('carrierID', 8)->nullable();
            $table->string('fname', 50)->nullable();
            $table->string('lname', 50)->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('phone2', 10)->nullable();
            $table->text('Note')->nullable();
            $table->dateTime('password_reset_date');
            $table->text('password_history')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_carrierlogin');
    }
};
