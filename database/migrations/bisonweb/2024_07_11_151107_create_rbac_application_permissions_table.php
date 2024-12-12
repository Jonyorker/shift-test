<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_application_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_application_routes_id');
            $table->integer('rbac_roles_id');
            $table->tinyInteger('is_allowed');

            $table->unique(['rbac_application_routes_id', 'rbac_roles_id'], 'uq__rbac_per__bcc32b4dab33fb1e');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_application_permissions');
    }
};
