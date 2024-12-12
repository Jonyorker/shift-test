<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonltl_execution', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ord')->nullable();
            $table->integer('seq')->nullable();
            $table->integer('mov')->nullable();
            $table->integer('leg')->nullable();
            $table->string('event', 6)->nullable();
            $table->dateTime('dt')->nullable();
            $table->string('cmp', 8)->nullable();
            $table->integer('city')->nullable();
            $table->string('cty_nmstct', 50)->nullable();
            $table->decimal('pcs', 19, 4)->nullable();
            $table->decimal('wgt', 19, 4)->nullable();
            $table->decimal('pallets', 19, 4)->nullable();
            $table->string('status', 3)->nullable();
            $table->string('trl', 13)->nullable();
            $table->string('ponum', 10)->nullable();
            $table->string('carid', 8)->nullable();
            $table->string('cmt')->nullable();
            $table->integer('tripord')->nullable();
            $table->integer('tripstp')->nullable();
            $table->integer('tripleg')->nullable();
            $table->integer('manifest')->nullable();
            $table->dateTime('depdt')->nullable();
            $table->string('loaded', 3)->nullable();
            $table->dateTime('lastautoupdate')->nullable();
            $table->dateTime('earlydt')->nullable();
            $table->dateTime('latedt')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonltl_execution');
    }
};
