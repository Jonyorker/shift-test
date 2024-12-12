<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('help_desk_resources_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label')->nullable();
            $table->string('code')->nullable();
            $table->longText('note')->nullable();
            $table->integer('level')->nullable();
            $table->integer('parent_id')->nullable();
            $table->tinyInteger('is_active')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('help_desk_resources_category');
    }
};
