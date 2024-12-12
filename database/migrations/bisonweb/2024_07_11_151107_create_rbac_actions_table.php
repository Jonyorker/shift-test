<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_controllers_id');
            $table->string('label', 150)->nullable();
            $table->string('action', 100);
            $table->string('type', 100);
            $table->integer('parent_id');
            $table->integer('child_id');
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_development');
            $table->tinyInteger('is_certification');
            $table->tinyInteger('is_production');

            $table->unique(['rbac_controllers_id', 'action'], 'uq__rbac_act__e430a2a1dd71ad90');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_actions');
    }
};
