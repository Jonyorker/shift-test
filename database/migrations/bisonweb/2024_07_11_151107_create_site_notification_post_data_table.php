<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('site_notification_post_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id', 20)->nullable();
            $table->string('ip_address')->nullable();
            $table->integer('site_notification_id')->nullable();
            $table->dateTime('created_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('site_notification_post_data');
    }
};
