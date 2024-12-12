<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_family_members_backup', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_id');
            $table->integer('family_id');
            $table->string('status', 50)->nullable();
            $table->integer('page_number')->nullable();
            $table->integer('rotation_degree');
            $table->integer('imagelookup_id')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_family_members_backup');
    }
};
