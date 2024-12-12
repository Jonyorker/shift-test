<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('incident_reports_rejected', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('incident_reports_id');
            $table->string('emp_id', 10);
            $table->text('comment')->nullable();
            $table->dateTime('rejected_date');
            $table->string('ip_address');
            $table->tinyInteger('is_supervisor');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('incident_reports_rejected');
    }
};
