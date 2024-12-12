<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_card', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id', 50);
            $table->string('driver_id', 10)->nullable()->index('indx_driver');
            $table->string('card_number', 20)->index('indx_card');
            $table->string('status', 10);
            $table->dateTime('created_date');
            $table->dateTime('expired_date')->nullable();
            $table->tinyInteger('is_test');
            $table->string('card_identification')->nullable();
            $table->float('current_balance', null, 0)->nullable();
            $table->dateTime('last_updated_date');
            $table->integer('policy_number');
            $table->boolean('is_digital');
            $table->integer('adv_request')->nullable();
            $table->dateTime('last_cash_adv_mobile')->nullable();
            $table->float('adv_balance', 53, 0);
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_card');
    }
};
