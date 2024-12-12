<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_monitor_ppe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yard_monitor_id');
            $table->tinyInteger('safety_shoes');
            $table->tinyInteger('safety_vest');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_monitor_ppe');
    }
};
