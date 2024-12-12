<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('expiration_driver_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_code', 100);
            $table->integer('expiration_company_detail_id');
            $table->integer('expiration_assigned_reason_id')->nullable();
            $table->dateTime('created_date');
            $table->string('created_by', 100);
            $table->dateTime('updated_date')->nullable();
            $table->binary('updated_by')->nullable();
            $table->dateTime('expiration_date');
            $table->dateTime('completed_date')->nullable();
            $table->integer('priority');
            $table->text('comment')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('expiration_driver_history');
    }
};
