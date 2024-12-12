<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('site_notification_access', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_notification_id');
            $table->text('role')->nullable();
            $table->tinyInteger('has_access');
            $table->string('terminal')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('site_notification_access');
    }
};
