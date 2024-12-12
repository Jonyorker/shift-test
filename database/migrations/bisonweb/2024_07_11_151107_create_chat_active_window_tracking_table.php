<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_active_window_tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 20)->index('indx_emp');
            $table->dateTime('event_date');
            $table->integer('event_date_unix');
            $table->string('rabbit_id', 100)->nullable();
            $table->string('session_id', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_active_window_tracking');
    }
};
