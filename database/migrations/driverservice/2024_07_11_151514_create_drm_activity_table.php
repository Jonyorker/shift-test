<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_activity', function (Blueprint $table) {
            $table->integer('act_id')->unique('pk_actid');
            $table->string('mpp_id', 8)->index('pk_mppid');
            $table->string('act_user', 30)->nullable();
            $table->dateTime('act_datetime')->nullable();
            $table->integer('act_content')->nullable();
            $table->integer('act_biscontent')->nullable();
            $table->string('act_category', 20)->nullable();
            $table->string('act_subject', 120)->nullable();
            $table->integer('act_parentthread')->nullable();
            $table->string('act_relatesto', 10)->nullable();
            $table->string('act_status', 6)->nullable();
            $table->integer('act_openissues')->nullable();
            $table->binary('act_attachment')->nullable();
            $table->string('act_summary')->nullable();
            $table->integer('act_move')->nullable();
            $table->integer('act_stopnum')->nullable();
            $table->smallInteger('act_notify')->nullable();
            $table->dateTime('act_notifydate')->nullable();
            $table->smallInteger('act_confidential')->nullable();
            $table->string('act_format', 20)->nullable();
            $table->string('act_category2', 20)->nullable();
            $table->integer('act_PDRP')->nullable();
            $table->integer('act_PDRP_nextactid')->nullable();
            $table->string('act_PDRPlevel', 4)->nullable();

            $table->index(['mpp_id', 'act_datetime'], 'dk_mppid');

        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_activity');
    }
};
