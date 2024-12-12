<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_ViolationDetails', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('InspectionCountry', 3)->nullable();
            $table->integer('CleanInspection')->nullable();
            $table->integer('CleanHazmat')->nullable();
            $table->string('TractorCause', 8)->nullable();
            $table->string('DriverCause', 8)->nullable();
            $table->string('TrailerCause', 8)->nullable();
            $table->integer('TrcLights')->nullable();
            $table->integer('TrcABS')->nullable();
            $table->integer('TrcBrakes')->nullable();
            $table->integer('TrcWindshield')->nullable();
            $table->integer('TrcTire')->nullable();
            $table->integer('TrcDecals')->nullable();
            $table->integer('TrcOther')->nullable();
            $table->string('TrcOtherDesc', 50)->nullable();
            $table->integer('DrvHOS')->nullable();
            $table->integer('DrvDangerousGoods')->nullable();
            $table->integer('DrvDocumentation')->nullable();
            $table->integer('DrvSpeeding')->nullable();
            $table->integer('DrvSeatbelt')->nullable();
            $table->integer('DrvOther')->nullable();
            $table->string('DrvOtherDesc', 50)->nullable();
            $table->integer('TrlLights')->nullable();
            $table->integer('TrlABS')->nullable();
            $table->integer('TrlBrakes')->nullable();
            $table->integer('TrlSuspension')->nullable();
            $table->integer('TrlTire')->nullable();
            $table->integer('TrlDangerousGoods')->nullable();
            $table->integer('TrlDecals')->nullable();
            $table->integer('TrlUnsecure')->nullable();
            $table->integer('TrlOther')->nullable();
            $table->string('TrlOtherDesc', 50)->nullable();
            $table->integer('iss_id')->nullable();
            $table->integer('trlOverweight')->nullable();
            $table->integer('TrcOverweight')->nullable();
            $table->integer('DrvOverweight')->nullable();
            $table->string('Notes', 100)->nullable();
            $table->dateTime('ViolationDate')->nullable();
            $table->string('ProvState', 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_ViolationDetails');
    }
};
