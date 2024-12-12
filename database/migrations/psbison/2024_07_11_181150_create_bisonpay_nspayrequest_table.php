<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonpay_nspayrequest', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fromname', 20)->nullable();
            $table->dateTime('msgdt')->nullable();
            $table->dateTime('recvdt')->nullable();
            $table->integer('basesn')->nullable();
            $table->string('drv', 10)->nullable();
            $table->string('move', 10)->nullable();
            $table->string('arrdt', 8)->nullable();
            $table->string('arrtm', 4)->nullable();
            $table->string('depdt', 8)->nullable();
            $table->string('deptm', 4)->nullable();
            $table->string('loc', 60)->nullable();
            $table->string('hrs', 5)->nullable();
            $table->string('signedbol', 1)->nullable();
            $table->string('note', 200)->nullable();
            $table->dateTime('acceptdt')->nullable();
            $table->string('acceptby', 30)->nullable();
            $table->decimal('payamt', 19, 4)->nullable();
            $table->integer('payid')->nullable();
            $table->string('status', 10)->nullable();
            $table->dateTime('statusdt')->nullable();
            $table->string('declinenote', 250)->nullable();
            $table->float('payqty', 53, 0)->nullable();
            $table->string('pyd_description', 75)->nullable();
            $table->integer('stp')->nullable();
            $table->integer('minover')->nullable();
            $table->integer('nspr_reasoncode_id')->nullable();
            $table->string('stpevt', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonpay_nspayrequest');
    }
};
