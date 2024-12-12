<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_issue', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('huddle_project_id');
            $table->integer('huddle_resource_category_id');
            $table->dateTime('created_date');
            $table->string('created_by', 10);
            $table->text('description');
            $table->integer('parent_id');
            $table->integer('version_number');
            $table->tinyInteger('is_active');
            $table->integer('huddle_project_resource_category_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_issue');
    }
};
