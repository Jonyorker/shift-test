<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_planner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('huddle_project_id');
            $table->dateTime('created_date');
            $table->string('created_by', 10);
            $table->text('opportunity');
            $table->integer('huddle_resource_category_id');
            $table->dateTime('due_date')->nullable();
            $table->dateTime('closed_date')->nullable();
            $table->dateTime('completed_date')->nullable();
            $table->integer('huddle_resource_priority_id');
            $table->integer('parent_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_planner');
    }
};
