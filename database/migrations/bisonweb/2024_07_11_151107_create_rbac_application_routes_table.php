<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_application_routes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_product_id')->index('indx_products');
            $table->dateTime('created_date');
            $table->string('label')->nullable();
            $table->string('route_name', 4000);
            $table->string('version', 20)->nullable();
            $table->integer('parent_id');
            $table->integer('child_id');
            $table->dateTime('updated_date');
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_development');
            $table->tinyInteger('is_certification');
            $table->tinyInteger('is_production');
            $table->string('initial_version', 20)->nullable();

            $table->unique(['rbac_product_id', 'route_name'], 'unq_routes');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_application_routes');
    }
};
