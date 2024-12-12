<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid')->nullable();
            $table->string('ip_address', 30)->nullable();
            $table->string('emp_id')->nullable();
            $table->dateTime('created_date');
            $table->dateTime('added_date');
            $table->dateTime('modified_date')->nullable();
            $table->string('modified_by')->nullable();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->integer('file_size_in_bytes')->nullable();
            $table->string('current_md5', 32)->nullable();
            $table->tinyInteger('is_active');

            $table->index(['emp_id', 'is_active'], 'emp_id_is_active_includes');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_images');
    }
};
