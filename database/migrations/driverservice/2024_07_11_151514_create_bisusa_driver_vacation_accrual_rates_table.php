<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('bisusa_driver_vacation_accrual_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_code', 50)->unique('uq__bisusa_d__9b64a2db1c7a36d0');
            $table->dateTime('created_date')->useCurrent();
            $table->decimal('calculated_rate', 10);
            $table->decimal('bypassed_rate', 10)->default(0);
            $table->dateTime('updated_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('bisusa_driver_vacation_accrual_rates');
    }
};
