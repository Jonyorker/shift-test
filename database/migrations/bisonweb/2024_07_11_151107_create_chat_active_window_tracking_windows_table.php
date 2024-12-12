<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_active_window_tracking_windows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chat_active_window_tracking_id')->index('indx_window_id');
            $table->string('window_name', 50)->nullable();
            $table->integer('window_id')->nullable();
            $table->boolean('is_active_window');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_active_window_tracking_windows');
    }
};
