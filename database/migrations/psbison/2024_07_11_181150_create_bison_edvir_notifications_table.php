<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_edvir_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->string('eventTS')->nullable();
            $table->dateTime('eventTS_cst')->nullable();
            $table->string('inspectedEquipment')->nullable();
            $table->integer('unitAddress')->nullable();
            $table->string('deviceID', 100)->nullable();
            $table->string('equipType', 100)->nullable();
            $table->decimal('lat', 9, 6)->nullable();
            $table->decimal('lon', 9, 6)->nullable();
            $table->string('posTS')->nullable();
            $table->dateTime('posTS_cst')->nullable();
            $table->tinyInteger('posType')->nullable();
            $table->tinyInteger('ignitionStatus')->nullable();
            $table->tinyInteger('tripStatus')->nullable();
            $table->integer('ltdDistance')->nullable();
            $table->string('driverID', 10)->nullable();
            $table->boolean('driverAuthenticated')->nullable();
            $table->boolean('hasdefects')->nullable();
            $table->boolean('closedbydriver')->nullable();
            $table->integer('transaction_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_edvir_notifications');
    }
};
