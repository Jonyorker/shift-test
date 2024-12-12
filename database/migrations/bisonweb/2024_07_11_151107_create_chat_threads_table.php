<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_threads', function (Blueprint $table) {
            $table->increments('id')->unique('id');
            $table->integer('reason_id');
            $table->integer('start_by')->nullable();
            $table->dateTime('start_datetime')->index('ix_sqlserver_bisonweb_chatthreads_startdatetime');
            $table->integer('end_by')->nullable();
            $table->dateTime('end_datetime')->nullable()->index('ix_sqlserver_bisonweb_chatthreads_enddatetime');
            $table->string('status', 20)->nullable();
            $table->tinyInteger('is_test');
            $table->string('uid')->nullable()->unique('uid');
            $table->integer('queue_id');
            $table->integer('end_reason_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_threads');
    }
};
