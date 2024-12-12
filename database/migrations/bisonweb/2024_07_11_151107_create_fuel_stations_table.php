<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('fuel_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->integer('lgh_number')->nullable();
            $table->integer('locid')->nullable();
            $table->string('fueltype')->nullable();
            $table->string('name')->nullable();
            $table->string('city')->nullable();
            $table->string('prov')->nullable();
            $table->decimal('lat', 15, 6)->nullable();
            $table->decimal('lng', 15, 6)->nullable();
            $table->decimal('along', 15, 6)->nullable();
            $table->decimal('dist', 15, 6)->nullable();
            $table->decimal('price', 15, 6)->nullable();
            $table->decimal('exch', 15, 6)->nullable();
            $table->decimal('ifta', 15, 6)->nullable();
            $table->decimal('retail', 15, 6)->nullable();
            $table->decimal('rackprice', 15, 6)->nullable();
            $table->decimal('federaltax', 15, 6)->nullable();
            $table->decimal('freightcost', 15, 6)->nullable();
            $table->decimal('statetax', 15, 6)->nullable();
            $table->decimal('otherfees', 15, 6)->nullable();
            $table->tinyInteger('discounted')->nullable();
            $table->dateTime('startdate')->nullable();
            $table->string('addr')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->integer('efsid')->nullable();
            $table->tinyInteger('istp')->nullable();
            $table->tinyInteger('isactive')->nullable();
            $table->tinyInteger('scale')->nullable();
            $table->tinyInteger('bulkdef')->nullable();
            $table->string('facilities')->nullable();
            $table->integer('parking')->nullable();
            $table->tinyInteger('restaurant')->nullable();
            $table->tinyInteger('showers')->nullable();
            $table->string('note')->nullable();
            $table->integer('optimal')->nullable();
            $table->string('lgh_driver1')->nullable();
            $table->string('lgh_carrier')->nullable();
            $table->string('country')->nullable();
            $table->integer('sort_by')->nullable();
            $table->decimal('rebate', 19, 4);
            $table->boolean('included');
            $table->integer('carrier_fuel_plan_id')->nullable();
            $table->integer('carrier_fuel_plan_route_id')->nullable();
            $table->integer('lgh_miles')->nullable();
            $table->decimal('price_cad', 15, 6)->nullable();
            $table->decimal('price_usd', 15, 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('fuel_stations');
    }
};
