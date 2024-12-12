<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('sqlweb')->create('stops_auto_actualization_by_time', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_number');
            $table->integer('ord_hdrnumber');
            $table->integer('lgh_number');
            $table->integer('stp_number');
            $table->string('stp_event', 6);
            $table->dateTime('process_on')->nullable();
            $table->dateTime('created_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('sqlweb')->dropIfExists('stops_auto_actualization_by_time');
    }
};
