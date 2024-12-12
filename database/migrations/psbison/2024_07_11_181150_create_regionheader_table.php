<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('regionheader', function (Blueprint $table) {
            $table->integer('rgh_number');
            $table->integer('rgh_type');
            $table->string('rgh_id', 6);
            $table->string('rgh_name', 30)->nullable();
            $table->string('timestamp')->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('regionheader');
    }
};
