<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_tractorstatus', function (Blueprint $table) {
            $table->string('trc', 8);
            $table->string('latestatus', 20)->nullable();
            $table->decimal('milesor', 19, 4)->nullable();
            $table->decimal('milesremain', 19, 4)->nullable();
            $table->dateTime('lastupdate')->nullable();
            $table->integer('lastleg')->nullable();
            $table->decimal('milestofinal', 19, 4)->nullable();
            $table->decimal('milesremainnext', 19, 4)->nullable();
            $table->string('lastloc', 120)->nullable();
            $table->decimal('dNextLine', 19, 4)->nullable();
            $table->integer('closure_id')->nullable();
            $table->decimal('closure_dist', 19, 4)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_tractorstatus');
    }
};
