<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->index('ix_sqlserver_bisonweb_chatmessages_threadid');
            $table->integer('user_id');
            $table->string('uid', 120);
            $table->longtext('message')->nullable();
            $table->dateTime('datetime')->index('ix_sqlserver_bisonweb_chatmessages_datetime');
            $table->string('system_name', 30)->nullable();
            $table->integer('page_number')->index('ix_sqlserver_bisonweb_chatmessages_pagenumber');
            $table->string('click_event', 4000)->nullable();
            $table->string('click_event_label')->nullable();

            $table->index(['thread_id', 'datetime', 'page_number'], 'ix_chat_messages_threadid_datetime_pagenumber');
            $table->index(['thread_id', 'datetime'], 'ix_sqlserver_bisonweb_chatmessages_theradid_datetime');

            $table->unique(['uid', 'user_id'], 'uid_user_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_messages');
    }
};
