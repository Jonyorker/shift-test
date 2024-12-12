<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('hubspot_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hupspot_id');
            $table->dateTime('last_modified');
            $table->dateTime('created_date');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('life_cycle_stage', 100)->nullable();
            $table->string('employee_id', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('hubspot_profile');
    }
};
