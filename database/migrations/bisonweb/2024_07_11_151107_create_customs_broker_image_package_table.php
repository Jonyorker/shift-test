<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('customs_broker_image_package', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customs_broker_package_id')->nullable();
            $table->string('file_uuid')->nullable();
            $table->string('file_md5', 32)->nullable();
            $table->string('added_by')->nullable();
            $table->dateTime('added_date')->nullable();
            $table->dateTime('removed_date')->nullable();
            $table->string('removed_by')->nullable();
            $table->integer('stop_id')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('page_number')->nullable();
            $table->integer('is_paps')->nullable();
            $table->string('sent_by', 15)->nullable();
            $table->dateTime('sent_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('customs_broker_image_package');
    }
};
