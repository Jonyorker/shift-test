<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('expiration_code', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tmw_expiration_code', 6)->unique('uniq_expcode');
            $table->string('label')->nullable();
            $table->string('created_by', 100);
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_deleted');
            $table->dateTime('deleted_date')->nullable();
            $table->string('deleted_by', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('expiration_code');
    }
};
