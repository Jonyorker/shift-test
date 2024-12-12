<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_user_tracking_fleets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_tracking_id');
            $table->string('fleet', 5);

            $table->index(['fleet', 'user_tracking_id'], 'ix_chat_user_tracking_fleets_user_tracking_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_user_tracking_fleets');
    }
};
