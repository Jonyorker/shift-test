<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('website_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('intro')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->dateTime('modified_date');
            $table->string('website')->nullable();
            $table->string('emp_id', 10);
            $table->tinyInteger('is_external');
            $table->string('external_url')->nullable();
            $table->tinyInteger('is_active');
            $table->string('thumbnail_url')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('website_news');
    }
};
