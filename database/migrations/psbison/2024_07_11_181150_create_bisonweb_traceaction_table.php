<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonweb_traceaction', function (Blueprint $table) {
            $table->increments('trc_id');
            $table->string('trc_refnum', 30)->nullable();
            $table->integer('ord_hdrnumber')->nullable();
            $table->string('trc_type', 6)->nullable();
            $table->text('trc_email')->nullable();
            $table->string('user_id', 10)->nullable();
            $table->string('stp_numbers')->nullable();
            $table->dateTime('date_added');
            $table->string('hash_key')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonweb_traceaction');
    }
};
