<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('huddle_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('huddle_project_id')->index('ix_huddleuser_huddleprojectid');
            $table->string('emp_id', 10);
            $table->integer('huddle_resource_user_type_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('huddle_user');
    }
};
