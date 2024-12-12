<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('employee_notice_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('is_actionable');
            $table->integer('sort_order')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('employee_notice_type');
    }
};
