<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('intra_document_drive_memo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doc_control_id')->nullable();
            $table->string('title');
            $table->string('author')->nullable();
            $table->dateTime('published_date');
            $table->text('url')->nullable();
            $table->tinyInteger('req_action');
            $table->tinyInteger('is_lcv_update');
            $table->tinyInteger('is_drg_update');
            $table->integer('tab_number');
            $table->text('recipient');
            $table->string('emp_id', 10);
            $table->dateTime('created_date');
            $table->dateTime('modified_date');
            $table->tinyInteger('is_active');
            $table->string('memo_id', 100)->nullable();
            $table->text('email_recipient')->nullable();
            $table->tinyInteger('is_memo_email_sent')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('intra_document_drive_memo');
    }
};
