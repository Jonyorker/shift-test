<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonltl_manifest', function (Blueprint $table) {
            $table->increments('manifest');
            $table->dateTime('startdt')->nullable();
            $table->string('startcmp', 8)->nullable();
            $table->string('startcty', 100)->nullable();
            $table->dateTime('enddt')->nullable();
            $table->string('endcmp', 8)->nullable();
            $table->string('endcty', 100)->nullable();
            $table->integer('type')->nullable();
            $table->dateTime('createdt')->nullable();
            $table->string('createby', 30)->nullable();
            $table->dateTime('updatedt')->nullable();
            $table->string('updateby', 30)->nullable();
            $table->integer('ponum')->nullable();
            $table->string('carid', 8)->nullable();
            $table->integer('bisonmov')->nullable();
            $table->integer('bisonord')->nullable();
            $table->string('status', 6)->nullable();
            $table->string('startprov', 2)->nullable();
            $table->string('endprov', 2)->nullable();
            $table->dateTime('startdtdep')->nullable();
            $table->dateTime('enddtdep')->nullable();
            $table->integer('pickstop')->nullable();
            $table->integer('dropstop')->nullable();
            $table->text('notes')->nullable();
            $table->string('loaded', 3)->nullable();
            $table->string('currtrailer', 13)->nullable();
            $table->dateTime('pickearlydt')->nullable();
            $table->dateTime('picklatedt')->nullable();
            $table->dateTime('delvearlydt')->nullable();
            $table->dateTime('delvlatedt')->nullable();
            $table->dateTime('posent')->nullable();
            $table->string('posentby', 30)->nullable();
            $table->string('pronum', 30)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonltl_manifest');
    }
};
