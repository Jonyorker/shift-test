<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('comments', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('ticket_id');
            $table->text('body');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->string('is_public', 1)->nullable();
            $table->string('attachment_location')->nullable();
            $table->string('attachment_content_type')->nullable();
            $table->string('attachment_name')->nullable();
            $table->string('is_purchase', 1)->nullable();
            $table->string('is_labor', 1)->nullable();
            $table->string('is_inventory', 1)->nullable();
            $table->integer('collaborator_id')->nullable();
            $table->integer('remote_id')->nullable();
            $table->string('comment_type');
            $table->integer('attachment_size')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('comments');
    }
};
