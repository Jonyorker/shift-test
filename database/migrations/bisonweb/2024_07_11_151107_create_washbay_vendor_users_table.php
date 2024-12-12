<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('bisonweb')->create('washbay_vendor_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor', 10)->nullable();
            $table->string('terminal', 25)->nullable();
            $table->string('password')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('description', 80)->nullable();
            $table->tinyInteger('is_show');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('washbay_vendor_users');
    }
};
