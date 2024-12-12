<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('form_name')->nullable();
            $table->string('form_description')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('forms');
    }
};
