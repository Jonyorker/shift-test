<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bisonltl_damages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_number');
            $table->integer('ltlx_order');
            $table->string('uuid');
            $table->dateTime('date_created');
            $table->string('created_by', 50);
            $table->string('notes')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bisonltl_damages');
    }
};
