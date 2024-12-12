<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_id')->index('indx_users');
            $table->string('company_id', 50);
            $table->string('status', 50);
            $table->dateTime('hired_date');
            $table->dateTime('seniority_date')->nullable();
            $table->dateTime('termination_date')->nullable();
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();

            $table->unique(['user_list_id', 'company_id'], 'indx_usercompany');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_company');
    }
};
