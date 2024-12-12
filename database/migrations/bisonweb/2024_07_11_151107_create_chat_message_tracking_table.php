<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_message_tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 20);
            $table->dateTime('event_date');
            $table->integer('event_date_unix');
            $table->string('rabbit_id', 100)->nullable();
            $table->integer('thread_id')->nullable();
            $table->longText('message')->nullable();
            $table->string('message_uid', 100)->nullable();
            $table->dateTime('message_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_message_tracking');
    }
};
