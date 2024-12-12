<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_comments', function (Blueprint $table) {
            $table->integer('acc_id')->nullable()->index('dk_accid');
            $table->integer('cmt_id')->nullable();
            $table->string('cmt_type', 6)->nullable();
            $table->string('cmt_user', 50)->nullable();
            $table->dateTime('cmt_date')->nullable();
            $table->text('cmt_text')->nullable();
            $table->dateTime('cmt_editlast')->nullable();
            $table->integer('cmt_editcount')->nullable();
            $table->binary('cmt_data')->nullable();
            $table->integer('tmpaccid')->nullable();

            $table->index(['acc_id', 'cmt_type', 'cmt_date'], 'dk_id');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_comments');
    }
};
