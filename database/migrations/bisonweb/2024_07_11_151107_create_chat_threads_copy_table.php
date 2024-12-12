<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_threads_copy', function (Blueprint $table) {
            $table->increments('id')->unique('id');
            $table->integer('reason_id');
            $table->integer('start_by')->nullable();
            $table->dateTime('start_datetime');
            $table->integer('end_by')->nullable();
            $table->dateTime('end_datetime')->nullable()->index('ix_sqlserver_bisonweb_chatthreads_enddatetime');
            $table->string('status', 20)->nullable();
            $table->tinyInteger('is_test');
            $table->string('uid')->nullable()->index('uid');
            $table->integer('queue_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_threads_copy');
    }
};
