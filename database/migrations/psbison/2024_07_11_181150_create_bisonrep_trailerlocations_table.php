<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonrep_trailerlocations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('yard', 12);
            $table->string('cmp', 8);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonrep_trailerlocations');
    }
};
