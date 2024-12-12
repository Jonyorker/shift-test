<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('phone_report_agents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agent_id');
            $table->string('emp_id', 10)->nullable();
            $table->dateTime('active_date');
            $table->dateTime('deactivate_date');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('phone_report_agents');
    }
};
