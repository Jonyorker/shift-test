<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_lms_employee_mapping', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_id')->nullable();
            $table->integer('user_list_lms_group_id')->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_autoassigned');
            $table->dateTime('created_date');
            $table->string('created_by')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_lms_employee_mapping');
    }
};
