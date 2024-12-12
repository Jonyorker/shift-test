<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_planner_assignment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('huddle_planner_id');
            $table->string('emp_id')->nullable();
            $table->integer('sort_by');
            $table->dateTime('assigned_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_planner_assignment');
    }
};
