<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_ptalog', function (Blueprint $table) {
            $table->string('mpp_id', 8)->nullable();
            $table->dateTime('oldpta')->nullable();
            $table->dateTime('newpta')->nullable();
            $table->string('changeby', 40)->nullable();
            $table->dateTime('changedate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_ptalog');
    }
};
