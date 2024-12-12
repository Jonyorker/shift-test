<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('tranzactor')->create('Transaction', function (Blueprint $table) {
            $table->increments('OID');
            $table->integer('Batch')->nullable()->index('ibatch_transaction');
            $table->text('Content')->nullable();
            $table->text('ControlNumber')->nullable();
            $table->dateTime('DateTime')->nullable();
            $table->dateTime('SentDateTime')->nullable();
            $table->string('Destination', 1000)->nullable();
            $table->integer('Direction')->nullable();
            $table->string('DocumentType', 1000)->nullable()->index('nonclusteredindex-20151214-155611');
            $table->string('DocumentSubType', 100)->nullable();
            $table->text('FileName')->nullable();
            $table->text('Receiver')->nullable();
            $table->text('Sender')->nullable();
            $table->string('Source', 1000)->nullable();
            $table->integer('TransactionHold')->nullable()->index('itransactionhold_transaction');
            $table->text('TransactionSource')->nullable();
            $table->integer('TransactionStatus')->nullable();
            $table->integer('OptimisticLockField')->nullable();
            $table->integer('GCRecord')->nullable()->index('igcrecord_transaction');
            $table->integer('RetryCount')->nullable();

            $table->index(['Source', 'GCRecord'], 'source_non_clustered_index');
            $table->index(['TransactionStatus', 'Destination', 'Direction', 'GCRecord'], 'status_destination_direction');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('tranzactor')->dropIfExists('Transaction');
    }
};
