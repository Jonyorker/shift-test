<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iso', 2);
            $table->string('name', 80);
            $table->string('printable_name', 80);
            $table->string('iso3', 3)->nullable();
            $table->smallInteger('numcode')->nullable();
            $table->smallInteger('sort_order');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('country');
    }
};
