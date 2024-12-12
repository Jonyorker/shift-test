<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_user_tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 20);
            $table->dateTime('event_date');
            $table->integer('event_date_unix');
            $table->string('rabbit_id', 100)->nullable();
            $table->integer('queue_id');
            $table->integer('queue_count')->nullable();

            $table->index(['event_date', 'emp_id'], 'ix_chat_user_tracking_event_date_emp_id');
            $table->index(['event_date', 'emp_id', 'event_date_unix'], 'ix_chat_user_tracking_event_date_unix');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_user_tracking');
    }
};
