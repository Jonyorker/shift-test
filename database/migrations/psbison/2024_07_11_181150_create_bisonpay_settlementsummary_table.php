<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonpay_settlementsummary', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asgn_type', 6)->nullable();
            $table->string('asgn_id', 8)->nullable();
            $table->dateTime('payperiod')->nullable();
            $table->integer('miles')->nullable();
            $table->decimal('mileagepay', 19, 4)->nullable();
            $table->decimal('usmilepay', 19, 4)->nullable();
            $table->decimal('turnpikepay', 19, 4)->nullable();
            $table->decimal('droppay', 19, 4)->nullable();
            $table->decimal('borderpay', 19, 4)->nullable();
            $table->decimal('reeferpay', 19, 4)->nullable();
            $table->decimal('otherpay', 19, 4)->nullable();
            $table->decimal('deductions', 19, 4)->nullable();
            $table->decimal('nontrip', 19, 4)->nullable();
            $table->decimal('cdnfuel', 19, 4)->nullable();
            $table->decimal('usfuel', 19, 4)->nullable();
            $table->decimal('gst', 19, 4)->nullable();
            $table->decimal('exchange', 19, 4)->nullable();
            $table->decimal('maintfund', 19, 4)->nullable();
            $table->decimal('workorders', 19, 4)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonpay_settlementsummary');
    }
};
