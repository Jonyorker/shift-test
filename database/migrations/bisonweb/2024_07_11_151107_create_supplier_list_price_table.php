<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_list_price', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('family_id');
            $table->decimal('price', 10)->nullable()->index('price');
            $table->dateTime('create_date');
            $table->dateTime('expire_date')->nullable();
            $table->integer('suppliers_id');
            $table->integer('supply_list_id')->nullable();

            $table->unique(['family_id', 'suppliers_id'], 'supply_product_price');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_list_price');
    }
};
