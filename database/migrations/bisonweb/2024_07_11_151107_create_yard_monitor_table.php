<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_monitor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable();
            $table->string('created_by', 50);
            $table->dateTime('created_date');
            $table->dateTime('activity_date');
            $table->string('activity_type', 10);
            $table->integer('mov_number')->nullable();
            $table->string('primary_driver_id', 10)->nullable();
            $table->string('primary_contact')->nullable();
            $table->string('secondary_driver_id', 10)->nullable();
            $table->string('secondary_contact')->nullable();
            $table->string('company_id', 10)->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_type')->nullable();
            $table->string('unit_number', 50)->nullable();
            $table->string('license_plate', 50)->nullable();
            $table->string('yard_violation')->nullable();
            $table->smallInteger('has_ppe');
            $table->smallInteger('has_equipment_damage');
            $table->string('equipment_damage')->nullable();
            $table->string('yard_id', 50);
            $table->dateTime('scheduled_entry_date')->nullable();
            $table->dateTime('scheduled_exit_date')->nullable();
            $table->text('comments')->nullable();
            $table->boolean('activity_exception');
            $table->integer('lgh_number')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_monitor');
    }
};
