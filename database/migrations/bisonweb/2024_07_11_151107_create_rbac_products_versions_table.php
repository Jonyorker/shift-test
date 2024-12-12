<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_products_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_product_id');
            $table->string('version', 20);
            $table->dateTime('date_created');
            $table->dateTime('date_expired')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_products_versions');
    }
};
