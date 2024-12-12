<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('read_and_sign_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique('read_and_sign_tag_code');
            $table->string('name');
            $table->tinyInteger('is_active');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('read_and_sign_tag');
    }
};
