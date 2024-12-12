<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_carrier_order', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->string('carrier_id', 50);
            $table->integer('order_number');
            $table->integer('move_number');
            $table->integer('leg_number');
            $table->dateTime('start_date');
            $table->dateTime('earliest_start_date')->nullable();
            $table->dateTime('latest_start_date')->nullable();
            $table->dateTime('end_date');
            $table->dateTime('earliest_end_date')->nullable();
            $table->dateTime('latest_end_date')->nullable();
            $table->string('origin_name');
            $table->string('origin_address');
            $table->string('origin_city');
            $table->string('origin_state');
            $table->string('origin_zip', 50)->nullable();
            $table->string('origin_country', 100);
            $table->decimal('origin_latitude', 10, 6);
            $table->decimal('origin_longitude', 10, 6);
            $table->integer('origin_phone')->nullable();
            $table->integer('origin_gmt')->nullable();
            $table->string('destination_name');
            $table->string('destination_address');
            $table->string('destination_city');
            $table->string('destination_state');
            $table->string('destination_zip', 50)->nullable();
            $table->string('destination_country', 100);
            $table->decimal('destination_latitude', 10, 6);
            $table->decimal('destination_longitude', 10, 6);
            $table->integer('destination_phone')->nullable();
            $table->integer('destination_gmt')->nullable();
            $table->string('status', 50);
            $table->integer('weight')->nullable();
            $table->integer('miles')->nullable();
            $table->integer('pieces')->nullable();
            $table->integer('max_temp')->nullable();
            $table->integer('min_temp')->nullable();
            $table->string('commodity');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_carrier_order');
    }
};
