<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_jpcdata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('leg')->nullable();
            $table->string('reqhash', 32)->nullable();
            $table->decimal('startpay', 19, 4)->nullable();
            $table->decimal('timepay', 19, 4)->nullable();
            $table->decimal('distpay', 19, 4)->nullable();
            $table->decimal('eventpay', 19, 4)->nullable();
            $table->decimal('surgepay', 19, 4)->nullable();
            $table->decimal('extrapay', 19, 4)->nullable();
            $table->decimal('idlepay', 19, 4)->nullable();
            $table->decimal('totalpay', 19, 4)->nullable();
            $table->string('reqby', 30)->nullable();
            $table->dateTime('reqdt')->nullable();
            $table->integer('driversent')->nullable();
            $table->decimal('drivetime', 19, 4)->nullable();
            $table->decimal('drivedist', 19, 4)->nullable();
            $table->text('request')->nullable();
            $table->text('response')->nullable();
            $table->decimal('labourpay', 19, 4)->nullable();
            $table->integer('reason')->nullable();
            $table->integer('shiftid')->nullable();
            $table->integer('archive')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_jpcdata');
    }
};
