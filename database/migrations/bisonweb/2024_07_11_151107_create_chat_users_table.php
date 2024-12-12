<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->index('ix_sqlserver_bisonweb_chatusers_threadid');
            $table->string('emp_id');
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime')->nullable();
            $table->tinyInteger('assigned');
            $table->string('user_type', 10)->nullable();
            $table->string('type', 20)->nullable();

            $table->index(['id', 'thread_id', 'emp_id'], 'ix_chat_users_emp_id');
            $table->index(['end_datetime', 'assigned'], 'ix_sqlserver_bisonweb_chatusers_enddatetime_assigned');
            $table->index(['thread_id', 'assigned'], 'ix_sqlserver_bisonweb_chatusers_threadid_assigned');
            $table->index(['thread_id', 'emp_id'], 'ix_sqlserver_bisonweb_chatusers_threadid_empid');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_users');
    }
};
