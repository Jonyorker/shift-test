<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('docktool_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_number');
            $table->integer('ltlx_order');
            $table->string('image_type', 7);
            $table->string('uuid');
            $table->string('load_type', 6);
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('docktool_images');
    }
};
