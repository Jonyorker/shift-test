<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_controllers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_product_id');
            $table->string('label', 100);
            $table->string('controller', 50)->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_development');
            $table->tinyInteger('is_certification');
            $table->tinyInteger('is_production');
            $table->string('module', 50)->nullable();

            $table->unique(['rbac_product_id', 'controller', 'module'], 'uniq_module');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_controllers');
    }
};
