<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('customs_broker_image_converter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customs_broker_package_id');
            $table->string('file_uuid');
            $table->boolean('is_processed')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('customs_broker_image_converter');
    }
};
