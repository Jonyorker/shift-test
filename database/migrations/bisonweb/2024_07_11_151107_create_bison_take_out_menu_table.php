<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bison_take_out_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('price', 53, 0);
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bison_take_out_menu');
    }
};
