<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_contract', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_family_id');
            $table->integer('suppliers_id');
            $table->string('terminal', 100);
            $table->dateTime('created_date');
            $table->tinyInteger('is_primary');
            $table->integer('supplier_shop_id');
            $table->decimal('price', 10);

            $table->unique(['is_primary', 'supplier_shop_id'], 'shop_product');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_contract');
    }
};
