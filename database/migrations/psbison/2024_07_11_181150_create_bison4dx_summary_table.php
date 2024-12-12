<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison4dx_summary', function (Blueprint $table) {
            $table->integer('year')->nullable();
            $table->integer('week')->nullable();
            $table->dateTime('weekstart')->nullable();
            $table->dateTime('weekend')->nullable();
            $table->integer('trlbison')->nullable();
            $table->integer('trlrental')->nullable();
            $table->integer('trloneway')->nullable();
            $table->integer('trltotal')->nullable();
            $table->integer('trlintm')->nullable();
            $table->decimal('revenue', 19, 4)->nullable();
            $table->decimal('revenuegp', 19, 4)->nullable();
            $table->decimal('revenueintm', 19, 4)->nullable();
            $table->integer('trlday')->nullable();
            $table->integer('abltrips')->nullable();
            $table->integer('abltrldays')->nullable();
            $table->integer('ablloaddays')->nullable();
            $table->integer('abltrldaysbison')->nullable();
            $table->decimal('revtrl', 19, 4)->nullable();
            $table->decimal('revtrlrolling', 19, 4)->nullable();
            $table->decimal('revtarget', 19, 4)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison4dx_summary');
    }
};
