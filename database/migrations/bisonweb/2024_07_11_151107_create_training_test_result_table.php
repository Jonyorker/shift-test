<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('training_test_result', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('training_test_id');
            $table->string('question');
            $table->string('answer');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('training_test_result');
    }
};
