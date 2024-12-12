<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_rejected_reasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason', 50);
            $table->tinyInteger('is_active')->nullable();
            $table->tinyInteger('is_visible')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_rejected_reasons');
    }
};
