<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('formatted_name');
            $table->string('reporting_name');
            $table->string('aka_name')->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->string('gender_code', 50);
            $table->string('middle_name')->nullable();
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list');
    }
};
