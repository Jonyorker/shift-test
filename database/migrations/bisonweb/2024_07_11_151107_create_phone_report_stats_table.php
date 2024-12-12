<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('phone_report_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agent_id')->nullable();
            $table->dateTime('waittimesumHHMMSS')->nullable();
            $table->decimal('SumofCallsReturnedToQ', 7)->nullable();
            $table->dateTime('walkawaytimesum')->nullable();
            $table->decimal('SumofCallsReturnedToQDueToTimeout', 7)->nullable();
            $table->dateTime('RingTimeSum')->nullable();
            $table->dateTime('breaktimesumHHMMSS')->nullable();
            $table->decimal('SumofShortCallsAnswered', 7)->nullable();
            $table->dateTime('avgacdnacdtalktimedaily')->nullable();
            $table->dateTime('talktimesum')->nullable();
            $table->dateTime('agentloggedinHHMMSS')->nullable();
            $table->decimal('SumofCallsAnswered', 7)->nullable();
            $table->dateTime('DNTalkTimeTimestamp')->nullable();
            $table->decimal('totdnanswereddaily', 7)->nullable();
            $table->decimal('acdnacdansdaily', 7)->nullable();
            $table->dateTime('sumnotreadyHHMMSS')->nullable();
            $table->decimal('SumofCallsOffered', 7)->nullable();
            $table->decimal('ConfOutDaily', 7)->nullable();
            $table->decimal('TransfOutdaily', 7)->nullable();
            $table->dateTime('networktalktimedaily')->nullable();
            $table->dateTime('reservedtimeday')->nullable();
            $table->decimal('SumofNetworkCallsAnswered', 7)->nullable();
            $table->decimal('SumofReservedForCall', 7)->nullable();
            $table->dateTime('activity_date')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('phone_report_stats');
    }
};
