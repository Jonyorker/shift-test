<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_users_id');
            $table->string('company_id', 50);
            $table->tinyInteger('is_active');
            $table->dateTime('termination_date')->nullable();
            $table->dateTime('created_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_company');
    }
};
