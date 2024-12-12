<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('formstack_submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_id');
            $table->integer('submission_id');
            $table->integer('field_id');
            $table->text('label')->nullable();
            $table->string('type');
            $table->dateTime('submission_date')->nullable();
            $table->text('value')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('formstack_submissions');
    }
};
