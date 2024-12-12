<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150)->unique('uniq_product');
            $table->string('decription', 150)->nullable();
            $table->dateTime('created_date');
            $table->tinyInteger('is_active');
            $table->dateTime('updated_date');
            $table->boolean('is_app');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_products');
    }
};
