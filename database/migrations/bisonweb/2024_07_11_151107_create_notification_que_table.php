<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('notification_que', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notification_script_id');
            $table->integer('notification_pref_id');
            $table->dateTime('created_on');
            $table->dateTime('send_date');
            $table->text('to');
            $table->string('from');
            $table->string('type', 50);
            $table->string('subject');
            $table->text('message');
            $table->integer('parent_id')->nullable();
            $table->tinyInteger('is_test');
            $table->string('cc')->nullable();
            $table->text('bcc')->nullable();
            $table->smallInteger('is_sent');
            $table->string('additional_data')->nullable();

            $table->index(['send_date', 'is_sent'], 'index_by_time');
            $table->index(['notification_script_id', 'notification_pref_id', 'parent_id'], 'indx_by_script');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('notification_que');
    }
};
