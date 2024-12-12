<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_tractormilesdetail', function (Blueprint $table) {
            $table->string('trc', 8);
            $table->string('tm_fleet', 6);
            $table->dateTime('tm_date');
            $table->integer('tm_miles');
            $table->string('tm_type4', 6)->nullable();
            $table->integer('tm_paid')->nullable();
            $table->integer('tm_unpaid')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_tractormilesdetail');
    }
};
