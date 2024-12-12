<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('incident_reports_document', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('incident_reports_id');
            $table->string('name')->nullable();
            $table->string('mime', 100)->nullable();
            $table->integer('length')->nullable();
            $table->string('ext', 10)->nullable();
            $table->text('hash')->nullable();
            $table->string('emp_id', 10)->nullable();
            $table->dateTime('date_added')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('incident_reports_document');
    }
};
