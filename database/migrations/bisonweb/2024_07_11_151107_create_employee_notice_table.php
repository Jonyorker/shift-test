<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('employee_notice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id', 10)->index('employee_id');
            $table->integer('employee_notice_type_id')->index('employee_notice_type_id');
            $table->text('data')->nullable();
            $table->dateTime('removal_date')->nullable()->index('removal_date');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('employee_notice');
    }
};
