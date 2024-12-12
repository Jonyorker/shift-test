<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_management_log', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_created');
            $table->integer('yard_management_resource_yard_location_id');
            $table->string('equipement_information', 100);
            $table->string('emp_id', 10);
            $table->tinyInteger('is_team_work');
            $table->string('team_emp_id', 10)->nullable();
            $table->text('comment')->nullable();
            $table->string('shunt_number', 50)->nullable();
            $table->integer('from_location_id')->nullable();
            $table->integer('to_location_id')->nullable();
            $table->string('quick_check', 50)->nullable();
            $table->decimal('fuel_litres', 9, 3)->nullable();
            $table->integer('edvir_data_id')->nullable();
            $table->string('tmt_import_uuid', 64)->nullable();
            $table->tinyInteger('out_of_service')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_management_log');
    }
};
