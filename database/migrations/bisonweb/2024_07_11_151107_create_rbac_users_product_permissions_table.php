<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_users_product_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_product_id');
            $table->integer('rbac_users_id');
            $table->tinyInteger('has_access');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_users_product_permissions');
    }
};
