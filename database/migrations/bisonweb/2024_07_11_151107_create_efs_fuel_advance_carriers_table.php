<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_fuel_advance_carriers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id', 6);
            $table->integer('ord_number');
            $table->integer('move_number');
            $table->string('carrier_id', 8);
            $table->integer('car_account');
            $table->integer('car_contract');
            $table->string('gl_code', 12);
            $table->integer('ref_number');
            $table->decimal('approved_amount', 19, 4);
            $table->string('approved_currency', 3);
            $table->string('created_by', 50);
            $table->dateTime('created_date');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_fuel_advance_carriers');
    }
};
