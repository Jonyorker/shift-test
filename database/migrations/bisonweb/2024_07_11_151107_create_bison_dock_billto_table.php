<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bison_dock_billto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('billto_code', 50);
            $table->dateTime('created_date');
            $table->string('created_by', 50);
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bison_dock_billto');
    }
};
