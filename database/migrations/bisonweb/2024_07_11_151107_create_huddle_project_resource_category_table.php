<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_project_resource_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('huddle_project_id');
            $table->integer('huddle_resource_category_id');
            $table->integer('sort_order');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_project_resource_category');
    }
};
