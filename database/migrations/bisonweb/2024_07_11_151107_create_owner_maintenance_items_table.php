<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('owner_maintenance_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maintenance_record_id')->index('maintenance_record_id');
            $table->text('description');
            $table->string('odometer');
            $table->string('invoice')->nullable();
            $table->dateTime('date');
            $table->string('completed_by');
            $table->string('po_number', 100)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('owner_maintenance_items');
    }
};
