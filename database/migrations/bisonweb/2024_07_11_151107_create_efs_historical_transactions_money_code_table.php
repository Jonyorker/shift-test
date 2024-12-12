<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_historical_transactions_money_code', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('added_date');
            $table->string('money_code')->index('indx_moneycode');
            $table->dateTime('created_date');
            $table->string('created_by', 50);
            $table->string('issued_to')->nullable();
            $table->integer('efs_card_id')->nullable()->index('indx_cardid');
            $table->float('amount', null, 0);
            $table->float('amount_used', null, 0);
            $table->text('notes')->nullable();
            $table->text('payee')->nullable();
            $table->tinyInteger('is_voided');
            $table->dateTime('void_date')->nullable();
            $table->tinyInteger('is_test');
            $table->integer('efs_id')->nullable();
            $table->string('company_id', 50);
            $table->dateTime('first_used_date')->nullable();
            $table->integer('times_used');

            $table->unique(['money_code', 'is_test'], 'unqi_moneycode');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_historical_transactions_money_code');
    }
};
