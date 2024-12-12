<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_list_shop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_num', 24);
            $table->string('description', 120)->nullable();
            $table->string('category', 8)->nullable();
            $table->string('manufacturer', 12)->nullable();
            $table->string('proprietary', 20)->nullable();
            $table->decimal('std_cost', 10)->nullable();
            $table->string('vmrs', 12)->nullable();
            $table->tinyInteger('active');
            $table->string('stocked', 4)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_list_shop');
    }
};
