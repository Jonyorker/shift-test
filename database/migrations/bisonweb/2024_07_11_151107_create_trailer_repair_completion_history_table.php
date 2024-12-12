<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('trailer_repair_completion_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit_number', 20);
            $table->string('ro_number');
            $table->string('action', 50);
            $table->text('comment')->nullable();
            $table->dateTime('create_date');
            $table->string('created_by', 20);
            $table->string('yard_id', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('trailer_repair_completion_history');
    }
};
