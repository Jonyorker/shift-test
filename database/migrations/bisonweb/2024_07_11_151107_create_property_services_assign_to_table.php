<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('property_services_assign_to', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_services_locations_id');
            $table->integer('property_services_resources_id');
            $table->string('emp_id', 10);
            $table->string('type', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('property_services_assign_to');
    }
};
