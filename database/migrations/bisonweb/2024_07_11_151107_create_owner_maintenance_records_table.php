<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('owner_maintenance_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->index('emp_id');
            $table->dateTime('maintenance_date');
            $table->tinyInteger('no_work');
            $table->string('unit_number');
            $table->string('tractor_plate');
            $table->string('vin');
            $table->dateTime('created_date');
            $table->string('ip_address');
            $table->string('no_work_comment')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('owner_maintenance_records');
    }
};
