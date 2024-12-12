<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonpay_dttfbonus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mppid', 8)->nullable();
            $table->string('fleet', 6)->nullable();
            $table->string('cat', 6)->nullable();
            $table->string('type2', 6)->nullable();
            $table->string('type3', 6)->nullable();
            $table->integer('yy')->nullable();
            $table->integer('mm')->nullable();
            $table->integer('miles')->nullable();
            $table->integer('milestm')->nullable();
            $table->integer('logdays')->nullable();
            $table->integer('logdaystotal')->nullable();
            $table->integer('logdaysmiss')->nullable();
            $table->decimal('hours', 19, 4)->nullable();
            $table->dateTime('asof')->nullable();
            $table->string('result', 3)->nullable();
            $table->text('note')->nullable();
            $table->text('exceptnote')->nullable();
            $table->string('approve', 3)->nullable();
            $table->integer('targlog')->nullable();
            $table->integer('targmiles')->nullable();
            $table->integer('targhours')->nullable();
            $table->integer('statchange')->nullable();
            $table->integer('logdays6')->nullable();
            $table->integer('logdays0')->nullable();
            $table->integer('citymiles')->nullable();
            $table->integer('cityevents')->nullable();
            $table->string('audit', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonpay_dttfbonus');
    }
};
