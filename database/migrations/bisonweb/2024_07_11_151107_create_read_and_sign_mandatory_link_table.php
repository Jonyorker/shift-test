<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('read_and_sign_mandatory_link', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('read_and_sign_id');
            $table->string('department_code');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('read_and_sign_mandatory_link');
    }
};
