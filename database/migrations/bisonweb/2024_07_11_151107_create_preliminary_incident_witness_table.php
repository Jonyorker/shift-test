<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('preliminary_incident_witness', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('incident_id');
            $table->string('full_name');
            $table->string('day_phone', 25);
            $table->string('evening_phone', 25)->nullable();
            $table->string('email_address', 100)->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('preliminary_incident_witness');
    }
};
