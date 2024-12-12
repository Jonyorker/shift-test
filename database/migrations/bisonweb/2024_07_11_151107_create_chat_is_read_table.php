<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_is_read', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->index('ix_sqlserver_bisonweb_chatisread_threadid');
            $table->integer('message_id');
            $table->integer('user_id');
            $table->dateTime('read_datetime')->nullable();

            $table->index(['message_id', 'user_id', 'thread_id'], 'message_threadid_userid');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_is_read');
    }
};
