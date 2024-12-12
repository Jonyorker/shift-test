<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('read_and_sign', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->integer('read_and_sign_template_id')->nullable();
            $table->decimal('version', 30, 15);
            $table->dateTime('created_date');
            $table->string('emp_id', 10);
            $table->integer('parent_id');
            $table->integer('visibility_id')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('read_and_sign');
    }
};
