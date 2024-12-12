<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_list_shop_backup', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('item_num', 18);
            $table->string('description', 60)->nullable();
            $table->string('category', 8)->nullable();
            $table->string('manufacturer', 10)->nullable();
            $table->string('proprietary', 20)->nullable();
            $table->decimal('std_cost', 10)->nullable();
            $table->string('vmrs', 11)->nullable();
            $table->tinyInteger('active')->nullable();
            $table->string('stocked', 4)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_list_shop_backup');
    }
};
