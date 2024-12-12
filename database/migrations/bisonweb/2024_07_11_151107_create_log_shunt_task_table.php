<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('log_shunt_task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('code')->nullable();
            $table->tinyInteger('is_active');
            $table->integer('sort_order');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('log_shunt_task');
    }
};
