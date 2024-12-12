<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_resources_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('base_gl', 50)->nullable();
            $table->tinyInteger('is_active');
            $table->integer('folder_filecode')->nullable();
            $table->string('company_id', 50);
            $table->string('driver_type', 10)->nullable();
            $table->float('auto_process_limit', 53, 0)->nullable();
            $table->boolean('is_carrier');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_resources_category');
    }
};
