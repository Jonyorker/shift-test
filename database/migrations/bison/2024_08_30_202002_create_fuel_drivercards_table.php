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
        Schema::connection('bison')->create('fuel_drivercards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dnum', 6)->nullable()->index('dk_dnum');
            $table->string('fueltype', 2)->nullable();
            $table->string('cardno', 20)->nullable()->index('dk_cardno');
            $table->string('pin', 15)->nullable();
            $table->string('oldcard', 15)->nullable();
            $table->integer('blocked')->nullable();
            $table->dateTime('blockdate')->nullable();
            $table->integer('active')->nullable();
            $table->dateTime('startdate')->nullable();
            $table->dateTime('enddate')->nullable();
            $table->string('comment')->nullable();
            $table->dateTime('expirydate')->nullable();
            $table->string('cardtype', 10)->nullable();
            $table->string('carrier', 8)->nullable();
            $table->string('altid', 20)->nullable();
            $table->string('revtype1', 6)->nullable();

            $table->index(['fueltype', 'cardno', 'active', 'enddate'], 'pk_cardno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('bison')->dropIfExists('fuel_drivercards');
    }
};
