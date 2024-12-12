<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('tariffrowcolumn', function (Blueprint $table) {
            $table->string('timestamp')->nullable();
            $table->integer('trc_number');
            $table->integer('tar_number');
            $table->string('trc_rowcolumn', 1);
            $table->integer('trc_sequence');
            $table->string('trc_matchvalue', 50)->nullable();
            $table->decimal('trc_rangevalue', 19, 4)->nullable();
            $table->string('trc_multimatch')->nullable();
            $table->string('last_updateby', 256)->nullable();
            $table->dateTime('last_updatedate')->nullable();
            $table->string('trc_rateasflat', 1);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('tariffrowcolumn');
    }
};
