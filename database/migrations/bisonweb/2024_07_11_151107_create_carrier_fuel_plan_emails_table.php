<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('carrier_fuel_plan_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrier_fuel_plan_id')->nullable();
            $table->string('email_address')->nullable();
            $table->tinyInteger('is_active');
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
            $table->string('created_by')->nullable();
            $table->tinyInteger('email_sent');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('carrier_fuel_plan_emails');
    }
};
