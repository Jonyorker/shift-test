<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('customs_broker_rejected_reason', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customs_broker_package_id');
            $table->string('reason');
            $table->string('created_by');
            $table->dateTime('created_date');
            $table->dateTime('updated_by')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->string('driver')->nullable();
            $table->string('communication')->nullable();
            $table->integer('mov_number');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('customs_broker_rejected_reason');
    }
};
