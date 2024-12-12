<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbac_product_id')->nullable();
            $table->tinyInteger('is_active');
            $table->string('email')->unique('indx_email');
            $table->string('password');
            $table->string('ip_address', 50)->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name')->nullable();
            $table->string('formatted_name')->nullable();
            $table->string('formatted_name_reversed')->nullable();
            $table->string('aka_name', 100)->nullable();
            $table->string('user_id', 50)->unique('indx_user');
            $table->tinyInteger('password_reset');
            $table->tinyInteger('force_password_reset');
            $table->tinyInteger('force_email_reset');

            $table->unique(['email'], 'uniq_email');
            $table->unique(['user_id'], 'uniq_user');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_users');
    }
};
