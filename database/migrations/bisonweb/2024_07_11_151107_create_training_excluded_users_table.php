<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('training_excluded_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('training_slug', 100);
            $table->string('used_id');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('training_excluded_users');
    }
};
