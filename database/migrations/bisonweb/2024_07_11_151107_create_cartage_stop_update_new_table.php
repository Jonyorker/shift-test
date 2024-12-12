<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cartage_stop_update_new', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cartage_user_id')->nullable();
            $table->string('carrier_id', 10)->nullable();
            $table->string('stop_number', 10)->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->dateTime('event_time_cst')->nullable();
            $table->dateTime('event_time')->nullable();
            $table->string('type', 10)->nullable();
            $table->dateTime('created_date')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('error_message')->nullable();
            $table->tinyInteger('processed')->nullable();
            $table->string('modified_by', 10)->nullable();
            $table->tinyInteger('is_delete')->nullable();
            $table->string('created_by', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cartage_stop_update_new');
    }
};
