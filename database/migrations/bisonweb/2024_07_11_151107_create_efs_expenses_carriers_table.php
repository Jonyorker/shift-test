<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_expenses_carriers', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('is_test');
            $table->string('carrier_id', 50);
            $table->integer('efs_resources_category_id');
            $table->string('gl_code', 20)->nullable();
            $table->integer('mov_number');
            $table->integer('ord_hdrnumber')->nullable();
            $table->integer('lgh_number');
            $table->string('vendor_name')->nullable();
            $table->string('approved_by', 10)->nullable();
            $table->dateTime('approved_date')->nullable();
            $table->float('approved_amount', null, 0)->nullable();
            $table->string('approved_amount_unit', 10)->nullable();
            $table->float('efs_amount', null, 0)->nullable();
            $table->string('efs_reference_number')->nullable();
            $table->string('efs_money_code')->nullable();
            $table->integer('efs_processed');
            $table->dateTime('efs_processed_date')->nullable();
            $table->text('efs_processed_error')->nullable();
            $table->boolean('void_status');
            $table->dateTime('void_date')->nullable();
            $table->string('voided_by', 10)->nullable();
            $table->integer('efs_resources_rejected_reasons_id')->nullable();
            $table->string('request_uuid')->nullable();
            $table->boolean('is_hidden');
            $table->string('company_id', 20);
            $table->string('bison_po_number', 10)->nullable();
            $table->string('operations_notes', 500)->nullable();
            $table->boolean('is_sent')->nullable();
            $table->integer('efs_expense_carrier_money_codes')->nullable();

            $table->index(['is_test', 'carrier_id'], 'indx_carid');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_expenses_carriers');
    }
};
