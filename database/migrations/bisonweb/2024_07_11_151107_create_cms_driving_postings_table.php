<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cms_driving_postings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('description');
            $table->dateTime('modified_date');
            $table->string('emp_id', 10);
            $table->tinyInteger('is_active');
            $table->integer('cms_driving_positions_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->tinyInteger('is_internal_only');
            $table->tinyInteger('highlight_job');
            $table->tinyInteger('email_notification');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cms_driving_postings');
    }
};
