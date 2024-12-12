<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_users_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_users_id')->index('indx_users_id');
            $table->integer('rbac_roles_id');
            $table->string('company_id', 50)->nullable();

            $table->unique(['rbac_users_id', 'rbac_roles_id'], 'unq_access');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_users_roles');
    }
};
