<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('notification_pref', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notification_user_id');
            $table->integer('notification_script_id');
            $table->string('mins', 200)->nullable();
            $table->string('hours', 200)->nullable();
            $table->string('dow', 200)->nullable();
            $table->string('dom', 200)->nullable();
            $table->string('month', 200)->nullable();
            $table->tinyInteger('is_single')->nullable();
            $table->tinyInteger('is_active');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('notification_pref');
    }
};
