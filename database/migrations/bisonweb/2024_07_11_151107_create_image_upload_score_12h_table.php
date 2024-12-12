<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_upload_score_12h', function (Blueprint $table) {
            $table->string('driver_id', 50)->primary();
            $table->string('fleet', 20)->nullable();
            $table->string('driver_type', 20)->nullable();
            $table->integer('total_moves')->nullable();
            $table->integer('total_stops')->nullable();
            $table->integer('total_uploads')->nullable();
            $table->float('upload_score', null, 0)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_upload_score_12h');
    }
};
