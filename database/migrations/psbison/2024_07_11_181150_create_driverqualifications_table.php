<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('driverqualifications', function (Blueprint $table) {
            $table->string('drq_type', 6);
            $table->string('drq_id', 12)->nullable();
            $table->dateTime('drq_date')->nullable();
            $table->string('drq_driver', 12);
            $table->string('timestamp')->nullable();
            $table->tinyInteger('drq_quantity')->nullable();
            $table->dateTime('drq_expire_date')->nullable();
            $table->string('drq_expire_flag', 1)->nullable();
            $table->string('drq_source', 6)->nullable();
            $table->increments('driverqualification_id');
            $table->string('drq_field', 6)->nullable();
            $table->decimal('drq_value', 10)->nullable();
            $table->string('drq_units', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('driverqualifications');
    }
};
