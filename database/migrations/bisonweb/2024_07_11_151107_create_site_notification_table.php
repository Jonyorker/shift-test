<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('site_notification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain');
            $table->dateTime('created_date');
            $table->string('created_by', 10);
            $table->tinyInteger('is_active');
            $table->string('title', 150);
            $table->longText('message');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->longText('route_name');
            $table->string('notification_type', 20);
            $table->boolean('once_per_session');
            $table->tinyInteger('once')->nullable();
            $table->string('country', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('site_notification');
    }
};
