<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('request_a_quote', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website');
            $table->string('source');
            $table->dateTime('requested_date');
            $table->string('name')->nullable();
            $table->string('email_address')->nullable();
            $table->string('phone_number', 50)->nullable();
            $table->string('company')->nullable();
            $table->string('ip_address', 150);

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('request_a_quote');
    }
};
