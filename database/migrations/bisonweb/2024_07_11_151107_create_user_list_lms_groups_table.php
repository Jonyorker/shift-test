<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_lms_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('smarteru_lms_id')->nullable();
            $table->string('group_id')->nullable();
            $table->string('group_name')->nullable();
            $table->tinyInteger('is_active');
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_lms_groups');
    }
};
