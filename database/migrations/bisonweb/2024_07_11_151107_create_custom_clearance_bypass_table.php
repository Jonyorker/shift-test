<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('custom_clearance_bypass', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status_type', 50);
            $table->string('requested_by', 50);
            $table->dateTime('requested_date');
            $table->string('cancelled_by', 50)->nullable();
            $table->dateTime('cancelled_date')->nullable();
            $table->integer('move_number');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('custom_clearance_bypass');
    }
};
