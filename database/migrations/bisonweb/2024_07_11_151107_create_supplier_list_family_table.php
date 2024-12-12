<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_list_family', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suppliers_id');
            $table->integer('supply_list_id');
            $table->string('supplier_part_num', 150);
            $table->tinyInteger('is_alt');
            $table->string('description', 200)->nullable();

            $table->unique(['suppliers_id', 'supply_list_id', 'is_alt'], 'supplier_product');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_list_family');
    }
};
