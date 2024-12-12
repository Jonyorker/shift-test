<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('bisusa_driver_vacation_accrual', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_code', 50)->index('ix_bisusadrivervacationaccrual_drivercode');
            $table->string('quarter')->nullable();
            $table->decimal('accrual_amount', 36, 8)->nullable();
            $table->dateTime('created_date')->useCurrent();
            $table->dateTime('updated_date')->nullable();

            $table->unique(['driver_code', 'quarter'], 'ix_bisusadrivervacationaccrual_drivercode_quarter');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('bisusa_driver_vacation_accrual');
    }
};
