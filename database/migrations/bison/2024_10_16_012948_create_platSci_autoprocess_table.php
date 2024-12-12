<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('bison')->create('platSci_autoprocess', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stp')->nullable();
            $table->integer('leg')->nullable();
            $table->integer('mov')->nullable();
            $table->string('evt', 10)->nullable();
            $table->string('trc', 13)->nullable();
            $table->string('drv', 13)->nullable();
            $table->string('formname', 30)->nullable();
            $table->integer('formid')->nullable();
            $table->integer('recd')->nullable();
            $table->integer('procd')->nullable();
            $table->string('err', 20)->nullable();
            $table->dateTime('dt')->nullable();
            $table->string('messagetype', 20)->nullable();
            $table->integer('dummyleg')->nullable();
            $table->string('err2', 15)->nullable();
            $table->string('err3', 15)->nullable();
            $table->string('err4', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('bison')->dropIfExists('platSci_autoprocess');
    }
};
