<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('phone_report_stats_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agent_id');
            $table->dateTime('breaktimedetail')->nullable();
            $table->dateTime('ringtimedetail')->nullable();
            $table->dateTime('AvgwaitHHMMSS')->nullable();
            $table->dateTime('loggedinHHMMSS')->nullable();
            $table->dateTime('acdnacdtalktime')->nullable();
            $table->dateTime('NotReadyHHMMSS')->nullable();
            $table->integer('CallsReturnedToQDueToTimeout')->nullable();
            $table->integer('CallsReturnedToQ')->nullable();
            $table->integer('ShortCallsAnswered')->nullable();
            $table->dateTime('walkawaytimedetail')->nullable();
            $table->integer('CallsAnswered')->nullable();
            $table->dateTime('skillsettalktime')->nullable();
            $table->dateTime('dntimedetails')->nullable();
            $table->integer('CallsOffered')->nullable();
            $table->decimal('dnanswereddetails', 7)->nullable();
            $table->decimal('acdnacdansdetails', 7)->nullable();
            $table->decimal('confoutdetails', 7)->nullable();
            $table->decimal('transfoutdetails', 7)->nullable();
            $table->integer('NetworkCallsAnswered')->nullable();
            $table->integer('ReservedForCall')->nullable();
            $table->dateTime('networktalktimedetail')->nullable();
            $table->dateTime('reservedtimedetail')->nullable();
            $table->dateTime('activity_date')->nullable()->index('dk_actdate');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('phone_report_stats_details');
    }
};
