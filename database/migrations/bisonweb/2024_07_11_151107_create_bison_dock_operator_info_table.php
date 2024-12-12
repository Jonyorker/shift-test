<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bison_dock_operator_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_number')->nullable();
            $table->integer('move_number')->nullable();
            $table->string('activity_type', 50);
            $table->string('operator_code', 50);
            $table->string('start_trl_number', 50)->nullable();
            $table->string('end_trl_number', 50)->nullable();
            $table->string('dock', 50)->nullable();
            $table->string('seal_number', 50)->nullable();
            $table->integer('skid_count')->nullable();
            $table->string('bill_to', 50);
            $table->integer('staged')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->dateTime('created_date');
            $table->string('created_by', 50);
            $table->integer('total_time_in_minutes')->nullable();
            $table->string('carrier_id', 30)->nullable();
            $table->text('notes')->nullable();
            $table->integer('po_number')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bison_dock_operator_info');
    }
};
