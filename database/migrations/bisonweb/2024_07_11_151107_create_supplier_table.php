<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('email');
            $table->string('password');
            $table->text('api_key')->nullable();
            $table->dateTime('created_date');
            $table->tinyInteger('is_active');
            $table->string('company', 200);
            $table->string('role', 50);
            $table->string('emp_id', 10)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier');
    }
};
