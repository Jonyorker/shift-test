<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_times', function (Blueprint $table) {
            $table->increments('id')->unique('id');
            $table->integer('thread_id');
            $table->integer('user_id');
            $table->integer('message_id');
            $table->integer('increment')->nullable();
            $table->string('unit', 10)->nullable();
            $table->dateTime('created_datetime')->nullable();
            $table->dateTime('response_datetime')->nullable();

            $table->index(['thread_id', 'user_id'], 'thread_id_userid');
            $table->index(['thread_id', 'user_id', 'response_datetime'], 'thread_id_userid_responsedatetime');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_times');
    }
};
