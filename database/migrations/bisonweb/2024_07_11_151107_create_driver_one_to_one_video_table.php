<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('driver_one_to_one_video', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inviter_id', 10);
            $table->string('invitee_id', 10);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('session_id')->nullable();
            $table->string('token', 1000)->nullable();
            $table->tinyInteger('alert_sent')->nullable();
            $table->dateTime('sent_date')->nullable();
            $table->dateTime('created_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('driver_one_to_one_video');
    }
};
