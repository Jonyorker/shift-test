<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('training_course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 50)->unique('unqi_slug');
            $table->string('title', 150);
            $table->dateTime('created_on');
            $table->string('created_by', 50)->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->tinyInteger('is_active');
            $table->string('qualification_code', 50)->nullable();
            $table->string('resources')->nullable();
            $table->text('description')->nullable();
            $table->string('version', 50)->nullable();
            $table->integer('training_course_category_id');
            $table->string('expiry_code', 50)->nullable();
            $table->tinyInteger('is_internal');
            $table->integer('expiry_unit')->nullable();
            $table->string('expiry_type', 10)->nullable();
            $table->tinyInteger('expiry_is_close');
            $table->string('department_owner')->nullable();
            $table->dateTime('completion_date')->nullable();
            $table->dateTime('grace_period')->nullable();
            $table->string('feed_back_url')->nullable();
            $table->string('orientation_type', 50)->nullable();
            $table->string('orientation_group', 150)->nullable();
            $table->integer('reoccurring_expiration')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('training_course');
    }
};
