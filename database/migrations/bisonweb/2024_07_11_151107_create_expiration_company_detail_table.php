<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('expiration_company_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('expiration_code_id');
            $table->integer('priority');
            $table->integer('notification_days')->nullable();
            $table->string('company_id', 10);
            $table->string('report_to')->nullable();
            $table->string('bison_expiration_code', 20)->nullable();
            $table->dateTime('created_date');
            $table->string('created_by', 100);
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_deleted');
            $table->dateTime('deleted_date')->nullable();
            $table->string('deleted_by', 100)->nullable();

            $table->unique(['expiration_code_id', 'company_id', 'bison_expiration_code'], 'uq__expirati__e42d835ba2ed3704');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('expiration_company_detail');
    }
};
