<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('training_test', function (Blueprint $table) {
            $table->increments('id');
            $table->string('training_slug', 100);
            $table->string('user_id')->index('pk_userid_copy1');
            $table->string('result', 50)->nullable();
            $table->decimal('score_pctg', 16);
            $table->decimal('score_points', 16);
            $table->decimal('passing_pctg', 16);
            $table->decimal('passing_points', 16);
            $table->string('ip_address');
            $table->dateTime('create_on');
            $table->string('administrator')->nullable();
            $table->tinyInteger('is_system_process');
            $table->integer('bison_training_company_id')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('training_test');
    }
};
