<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label', 100)->nullable();
            $table->string('value', 100)->nullable();
            $table->integer('sort_order')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->integer('folder_code')->nullable();
            $table->string('route')->nullable();
            $table->string('admin_dept_name', 20)->nullable();
            $table->tinyInteger('is_uploadable')->nullable();
            $table->string('initial_complete_status')->nullable();
            $table->string('purge_date', 10)->nullable();
            $table->string('monitored_email')->nullable();
            $table->tinyInteger('is_dashboard')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_type');
    }
};
