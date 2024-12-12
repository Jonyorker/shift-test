<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('washbay_priorities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('washbay_log_id');
            $table->integer('washbay_resource_priority_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('washbay_priorities');
    }
};
