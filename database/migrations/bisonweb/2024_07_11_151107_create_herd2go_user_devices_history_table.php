<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('herd2go_user_devices_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->nullable();
            $table->string('device_uuid', 50)->nullable();
            $table->string('build_version')->nullable();
            $table->string('commit_version')->nullable();
            $table->string('app_version')->nullable();
            $table->string('browser_version')->nullable();
            $table->string('engine')->nullable();
            $table->string('grid_support')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('os_version')->nullable();
            $table->string('platform_name')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('product')->nullable();
            $table->string('sqllite_support')->nullable();
            $table->dateTime('source_time')->nullable();
            $table->string('model')->nullable();
            $table->string('pushy_devicetoken')->nullable();
            $table->tinyInteger('is_active');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('herd2go_user_devices_history');
    }
};
