<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('formstack_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_id')->nullable();
            $table->string('name');
            $table->integer('submissions');
            $table->dateTime('updated_date');
            $table->dateTime('created_date');
            $table->tinyInteger('is_active');
            $table->dateTime('last_submission_date')->nullable();
            $table->tinyInteger('encrypted');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('formstack_forms');
    }
};
