<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('thread_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('comment')->nullable();
            $table->dateTime('created_date');

            $table->index(['thread_id', 'created_date'], 'ix_sqlserver_bisonweb_chatcomments_createddate');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_comments');
    }
};
