<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_product_id');
            $table->string('label', 100)->nullable();
            $table->string('code');
            $table->text('notes')->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_default');
            $table->tinyInteger('is_auth_default');
            $table->tinyInteger('is_employee_default');
            $table->tinyInteger('is_auto_assignment');
            $table->tinyInteger('admin_assigment_only');

            $table->unique(['rbac_product_id', 'code'], 'uq__rbac_rol__c899c75bbaafbb68');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_roles');
    }
};
