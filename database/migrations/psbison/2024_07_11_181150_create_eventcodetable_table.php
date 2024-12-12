<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('eventcodetable', function (Blueprint $table) {
            $table->string('name', 50)->nullable();
            $table->string('abbr', 6);
            $table->integer('code')->nullable();
            $table->string('locked', 1)->nullable();
            $table->string('userlabelname', 20)->nullable();
            $table->string('edicode', 6)->nullable();
            $table->string('mile_typ_to_stop', 6)->nullable();
            $table->string('mile_typ_from_stop', 6)->nullable();
            $table->string('drv_pay_event', 6)->nullable();
            $table->string('fuel_tax_event', 6)->nullable();
            $table->string('fgt_event', 6)->nullable();
            $table->string('mfh_status_event', 1)->nullable();
            $table->string('lgh_status_event', 1)->nullable();
            $table->string('primary_event', 1)->nullable();
            $table->string('other_event', 1)->nullable();
            $table->string('trl_event', 1)->nullable();
            $table->string('timestamp')->nullable();
            $table->string('ect_payondepart', 1)->nullable();
            $table->string('ect_trlstart', 1)->nullable();
            $table->string('ect_trlend', 1)->nullable();
            $table->string('ect_billable', 1)->nullable();
            $table->string('ect_trcdrv_event', 1)->nullable();
            $table->string('ect_cmdcty_req', 1)->nullable();
            $table->string('ect_retired', 1)->nullable();
            $table->string('ect_purchase_service', 1)->nullable();
            $table->string('ect_EndDeadHead_event', 1)->nullable();
            $table->string('ect_BeginDeadHead_event', 1)->nullable();
            $table->string('ect_bt_start', 1)->nullable();
            $table->string('ect_bt_end', 1)->nullable();
            $table->string('ect_mt_start', 1)->nullable();
            $table->string('ect_mt_end', 1)->nullable();
            $table->string('ect_ld_start', 1)->nullable();
            $table->string('ect_ld_end', 1)->nullable();
            $table->string('ect_event_like_abbr', 6)->nullable();
            $table->string('ect_systemcode', 1)->nullable();
            $table->integer('ect_defaultdwelltime');
            $table->decimal('ect_defaulttimefirst', 6)->nullable();
            $table->decimal('ect_defaulttimesubnotb2b', 6)->nullable();
            $table->decimal('ect_defaulttimesubb2b', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('eventcodetable');
    }
};
