<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('notification_flag_tracking', function (Blueprint $table) {
            $table->increments('ID');
            $table->dateTime('date_trigger')->nullable();
            $table->string('userid', 30)->nullable();
            $table->smallInteger('PrevValue')->nullable();
            $table->smallInteger('NewValue')->nullable();
            $table->string('updatetype', 6)->nullable();
            $table->string('appname')->nullable();
            $table->integer('Notification_ID')->nullable();
            $table->integer('Notification_pref_ID')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('notification_flag_tracking');
    }
};
