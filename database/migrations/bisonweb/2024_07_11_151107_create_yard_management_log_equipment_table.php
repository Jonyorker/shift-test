<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_management_log_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yard_management_id');
            $table->string('unit_number');
            $table->string('unit_type', 100);
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_management_log_equipment');
    }
};
