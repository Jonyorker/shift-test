<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonltl_transfer_grid', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trip_number');
            $table->dateTime('created_date');
            $table->string('created_by', 50);
            $table->text('comments')->nullable();
            $table->integer('space_used')->nullable();
            $table->integer('space_remaining')->nullable();
            $table->text('image_url')->nullable();
            $table->tinyInteger('transfer_completed');
            $table->dateTime('completed_date')->nullable();
            $table->tinyInteger('priority');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonltl_transfer_grid');
    }
};
