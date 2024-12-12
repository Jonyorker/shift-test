<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('is_test');
            $table->integer('efs_card_id')->index('indx_card_id');
            $table->dateTime('created_date');
            $table->string('fleet', 10);
            $table->integer('efs_resources_category_id');
            $table->string('gl_code', 20)->nullable();
            $table->dateTime('expense_date');
            $table->integer('efs_resources_expense_type_id');
            $table->integer('mov_number')->nullable();
            $table->string('po_number', 12)->nullable();
            $table->tinyInteger('request_express_code');
            $table->string('vendor_name')->nullable();
            $table->string('image_uploader_family_uid')->nullable();
            $table->tinyInteger('request_type');
            $table->string('requested_by', 10)->nullable();
            $table->dateTime('requested_date')->nullable();
            $table->float('requested_amount', null, 0)->nullable();
            $table->string('requested_amount_unit', 10)->nullable();
            $table->integer('requested_status');
            $table->string('approved_by', 10)->nullable();
            $table->dateTime('approved_date')->nullable();
            $table->float('approved_amount', null, 0)->nullable();
            $table->string('approved_amount_unit', 10)->nullable();
            $table->float('approved_gst', null, 0)->nullable();
            $table->integer('approved_status');
            $table->float('exchange_rate', null, 0)->nullable();
            $table->float('efs_amount', null, 0)->nullable();
            $table->string('efs_reference_number')->nullable();
            $table->string('efs_money_code')->nullable();
            $table->integer('efs_processed');
            $table->dateTime('efs_processed_date')->nullable();
            $table->text('efs_processed_error')->nullable();
            $table->boolean('void_status');
            $table->dateTime('void_date')->nullable();
            $table->string('voided_by', 10)->nullable();
            $table->integer('order_number')->nullable();
            $table->string('invoice_number', 100)->nullable();
            $table->text('private_comments')->nullable();
            $table->string('bison_po_number', 10)->nullable();
            $table->integer('efs_resources_rejected_reasons_id')->nullable();
            $table->string('request_uuid')->nullable();
            $table->boolean('is_hidden');
            $table->boolean('reimburse_type');
            $table->integer('stp_number');
            $table->integer('cr_num')->nullable();
            $table->string('driver_comment', 500)->nullable();
            $table->string('operations_notes', 500)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_expenses');
    }
};
