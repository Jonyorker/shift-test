<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_resources_rejected_reasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason', 100);
            $table->boolean('is_active');
            $table->boolean('is_visible');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_resources_rejected_reasons');
    }
};
