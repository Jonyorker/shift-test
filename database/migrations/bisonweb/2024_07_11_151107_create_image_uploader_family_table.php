<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_family', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid');
            $table->dateTime('added_date');
            $table->string('added_by')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('modified_by')->nullable();
            $table->integer('image_uploader_type_id');
            $table->longText('comments')->nullable();
            $table->longText('admin_comments')->nullable();
            $table->tinyInteger('is_active');
            $table->dateTime('purged_date')->nullable();
            $table->tinyInteger('is_test');
            $table->tinyInteger('is_archived');
            $table->integer('source')->nullable();
            $table->smallInteger('is_autoprocessed');
            $table->dateTime('autoprocessed_date')->nullable();
            $table->string('autoprocessed_by')->nullable();
            $table->string('company_id', 50)->nullable();

            $table->index(['uid', 'is_active'], 'image_uploader_family_uid_is_active');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_family');
    }
};
