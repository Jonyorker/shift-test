<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('movepassenger', function (Blueprint $table) {
            $table->string('psgr_id', 8);
            $table->integer('mov_number');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('movepassenger');
    }
};
