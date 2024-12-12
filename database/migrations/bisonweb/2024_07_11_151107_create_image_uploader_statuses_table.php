<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status', 30)->nullable();
            $table->string('description', 60)->nullable();
            $table->integer('priority')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_statuses');
    }
};
