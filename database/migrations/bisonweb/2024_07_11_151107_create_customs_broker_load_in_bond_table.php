<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('customs_broker_load_in_bond', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ord_hdrnumber')->nullable();
            $table->integer('mov_number')->nullable();
            $table->string('trl_id', 13)->nullable();
            $table->string('ord_billto', 8)->nullable();
            $table->string('pars', 150)->nullable();
            $table->string('location', 100)->nullable();
            $table->string('reason')->nullable();
            $table->string('comments')->nullable();
            $table->integer('bond_status_id')->nullable();
            $table->dateTime('created_date');
            $table->string('created_by');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('customs_broker_load_in_bond');
    }
};
