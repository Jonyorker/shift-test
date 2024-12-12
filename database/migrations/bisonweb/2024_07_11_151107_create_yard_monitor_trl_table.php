<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_monitor_trl', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yard_monitor_id');
            $table->string('number', 50)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('owner')->nullable();
            $table->tinyInteger('is_primary');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_monitor_trl');
    }
};
