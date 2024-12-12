<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_latecomments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stp_number');
            $table->string('cmtby', 30)->nullable();
            $table->dateTime('cmtdate')->nullable();
            $table->text('cmttext')->nullable();
            $table->string('cmttype', 10)->nullable();
            $table->string('spoketo', 80)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_latecomments');
    }
};
