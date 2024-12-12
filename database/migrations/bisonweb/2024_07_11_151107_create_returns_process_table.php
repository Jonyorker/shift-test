<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('returns_process', function (Blueprint $table) {
            $table->increments('id');
            $table->string('processed_by', 25)->nullable();
            $table->date('inbound_date')->nullable();
            $table->string('receiver', 100)->nullable();
            $table->integer('shipper_order_number')->index('ix_order_number');
            $table->string('account_csr', 25)->nullable();
            $table->string('product_location', 25)->nullable();
            $table->string('trailer_id', 25)->nullable();
            $table->string('shipper', 50)->nullable();
            $table->string('temperature', 25)->nullable();
            $table->string('return_reason', 25);
            $table->string('outbound_status', 25)->nullable();
            $table->dateTime('outbound_date')->nullable();
            $table->string('disposition', 25)->nullable();
            $table->integer('return_order_number')->nullable();
            $table->string('closed_by', 25)->nullable();
            $table->string('billable', 15)->nullable();
            $table->integer('cost_recovery_number')->nullable();
            $table->integer('stop_number');
            $table->string('product_description_notes')->nullable();
            $table->string('stp_event')->nullable();
            $table->dateTime('last_updated')->nullable();
            $table->smallInteger('sent_to_csr')->nullable();
            $table->dateTime('created_date')->nullable()->index('ix_created_date');
            $table->string('return_to_bison_order_number', 25)->nullable();
            $table->string('return_reason_other')->nullable();
            $table->string('purchase_order_number', 25)->nullable();
            $table->tinyInteger('supervisor_reviewed')->nullable();
            $table->string('storage_trailer', 25)->nullable();
            $table->string('dock_status', 25)->nullable();
            $table->string('charge_method', 25)->nullable();
            $table->string('dock_location', 15)->nullable();
            $table->string('customer_reference_number', 100)->nullable();

            $table->index(['created_date', 'outbound_status'], 'ix_created_date_outbound_status');
            $table->index(['disposition', 'dock_status', 'created_date'], 'ix_dock_status');
            $table->index(['stop_number', 'dock_status', 'disposition'], 'ix_stop_dock_status_disposition');
            $table->index(['stop_number', 'outbound_status'], 'ix_stop_outbound_status');
            $table->unique(['shipper_order_number', 'stop_number'], 'uniq_return');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('returns_process');
    }
};
