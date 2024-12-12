<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_list_request_update', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supply_list_id');
            $table->integer('supplier_id');
            $table->dateTime('requested_date');
            $table->dateTime('request_sent')->nullable();

            $table->unique(['supply_list_id', 'supplier_id'], 'suppliers_product_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_list_request_update');
    }
};
