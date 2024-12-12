<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_historical_transactions_cash', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('added_date');
            $table->integer('efs_card_id');
            $table->float('amount', null, 0);
            $table->dateTime('created_date');
            $table->string('created_by', 50)->nullable();
            $table->string('cash_id', 10)->nullable();
            $table->string('cash_label')->nullable();
            $table->string('reference_number')->nullable();
            $table->integer('transaction_id')->nullable();

            $table->index(['efs_card_id', 'created_date'], 'indx_transaction');

            $table->unique(['efs_card_id', 'amount', 'created_date'], 'unq_transaction');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_historical_transactions_cash');
    }
};
