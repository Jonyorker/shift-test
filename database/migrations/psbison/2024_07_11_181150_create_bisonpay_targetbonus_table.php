<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonpay_targetbonus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 6)->nullable();
            $table->string('cat', 6)->nullable();
            $table->integer('yy')->nullable();
            $table->integer('mm')->nullable();
            $table->integer('val')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonpay_targetbonus');
    }
};
