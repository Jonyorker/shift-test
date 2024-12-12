<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('returns_process_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('case_count', 100)->nullable();
            $table->string('name', 200)->nullable();
            $table->string('codes', 100)->nullable();
            $table->integer('returns_process_id')->index('ix_returns_process_id');
            $table->string('upc')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('purchase_order_number', 35)->nullable();
            $table->integer('skid_count')->nullable();
            $table->string('return_reason', 50)->nullable();
            $table->string('return_reason_other')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('returns_process_products');
    }
};
