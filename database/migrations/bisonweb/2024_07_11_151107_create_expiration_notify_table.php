<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('expiration_notify', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exp_code', 10)->unique('exp_code');
            $table->integer('number_of_days')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('expiration_notify');
    }
};
