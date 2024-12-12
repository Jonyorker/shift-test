<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cms_driving_positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('profile');
            $table->string('emp_id', 10);
            $table->dateTime('modified_date');
            $table->tinyInteger('is_active');
            $table->text('intro');
            $table->string('image');
            $table->text('image_data');
            $table->integer('sort_order');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cms_driving_positions');
    }
};
