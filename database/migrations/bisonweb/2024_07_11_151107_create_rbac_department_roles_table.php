<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_department_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_product_id');
            $table->integer('rbac_role_id');
            $table->boolean('is_active');
            $table->string('company_id', 50)->nullable();
            $table->string('org_level_one')->nullable();
            $table->string('org_level_two')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_department_roles');
    }
};
