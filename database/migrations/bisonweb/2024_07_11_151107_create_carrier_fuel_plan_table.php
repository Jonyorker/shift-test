<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('carrier_fuel_plan', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
            $table->string('created_by')->nullable();
            $table->string('carrier_id')->nullable();
            $table->string('updated_by')->nullable();
            $table->tinyInteger('is_active');
            $table->decimal('total_miles', 15, 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('carrier_fuel_plan');
    }
};
