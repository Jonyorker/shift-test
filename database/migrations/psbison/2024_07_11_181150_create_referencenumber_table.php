<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('referencenumber', function (Blueprint $table) {
            $table->integer('ref_tablekey');
            $table->string('ref_type', 6)->nullable();
            $table->string('ref_number', 30)->nullable();
            $table->string('ref_typedesc', 8)->nullable();
            $table->integer('ref_sequence')->nullable();
            $table->integer('ord_hdrnumber')->nullable();
            $table->string('timestamp')->nullable();
            $table->string('ref_table', 18)->nullable();
            $table->string('ref_sid', 1)->nullable();
            $table->string('ref_pickup', 1)->nullable();
            $table->string('last_updateby', 256)->nullable();
            $table->dateTime('last_updatedate')->nullable();
            $table->increments('ref_id');
            $table->string('AutoRefNumberOrigin', 50)->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('referencenumber');
    }
};
