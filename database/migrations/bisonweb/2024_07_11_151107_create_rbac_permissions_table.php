<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_actions_id');
            $table->integer('rbac_roles_id');
            $table->tinyInteger('is_allowed');

            $table->unique(['rbac_actions_id', 'rbac_roles_id'], 'uniq_permission');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_permissions');
    }
};
