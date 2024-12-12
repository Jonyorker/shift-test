<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_notifications_tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('script_run_date')->nullable();
            $table->integer('arrivaldate_unix_range_start')->nullable();
            $table->integer('arrivaldate_unix_range_end')->nullable();
            $table->integer('ord_hdrnumber')->nullable();
            $table->integer('mov_number')->nullable();
            $table->integer('lgh_number')->nullable();
            $table->integer('stp_number')->nullable();
            $table->string('stop_event', 5)->nullable();
            $table->integer('stp_arrivaldate_unix')->nullable();
            $table->dateTime('stp_arrivaldate')->nullable();
            $table->string('required_image', 5)->nullable();
            $table->string('driver', 20)->nullable();
            $table->string('alert_uuid')->nullable();
            $table->string('existing_family_uuid')->nullable();
            $table->integer('alert_sent_this_run')->nullable();
            $table->string('alert_message', 1000)->nullable();
            $table->string('skip_reason')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_notifications_tracking');
    }
};
