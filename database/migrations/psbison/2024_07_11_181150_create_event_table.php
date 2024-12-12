<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('event', function (Blueprint $table) {
            $table->integer('ord_hdrnumber')->nullable();
            $table->integer('stp_number')->nullable();
            $table->string('evt_eventcode', 6)->nullable();
            $table->integer('evt_number')->nullable();
            $table->dateTime('evt_startdate')->nullable();
            $table->dateTime('evt_enddate')->nullable();
            $table->string('evt_status', 6)->nullable();
            $table->dateTime('evt_earlydate')->nullable();
            $table->dateTime('evt_latedate')->nullable();
            $table->float('evt_weight', 53, 0)->nullable();
            $table->string('evt_weightunit', 6)->nullable();
            $table->integer('fgt_number')->nullable();
            $table->decimal('evt_count', 10)->nullable();
            $table->string('evt_countunit', 6)->nullable();
            $table->float('evt_volume', 53, 0)->nullable();
            $table->string('evt_volumeunit', 6)->nullable();
            $table->string('evt_pu_dr', 6)->nullable();
            $table->integer('evt_sequence')->nullable();
            $table->string('evt_contact', 30)->nullable();
            $table->string('timestamp')->nullable();
            $table->string('evt_driver1', 8)->nullable();
            $table->string('evt_driver2', 8)->nullable();
            $table->string('evt_tractor', 8)->nullable();
            $table->string('evt_trailer1', 13)->nullable();
            $table->string('evt_trailer2', 13)->nullable();
            $table->string('evt_chassis', 13)->nullable();
            $table->string('evt_dolly', 13)->nullable();
            $table->string('evt_carrier', 8)->nullable();
            $table->string('evt_refype', 6)->nullable();
            $table->string('evt_refnum', 30)->nullable();
            $table->string('evt_reason', 6)->nullable();
            $table->string('evt_enteredby', 20)->nullable();
            $table->integer('evt_hubmiles')->nullable();
            $table->tinyInteger('skip_trigger')->nullable();
            $table->string('bis_proc214', 3)->nullable();
            $table->integer('evt_notified')->nullable();
            $table->integer('evt_mov_number')->nullable();
            $table->string('evt_departure_status', 6)->nullable();
            $table->string('evt_converter', 8)->nullable();
            $table->integer('evt_hubmiles_trailer1')->nullable();
            $table->integer('evt_hubmiles_trailer2')->nullable();
            $table->string('evt_chassis2', 13)->nullable();
            $table->string('evt_dolly2', 13);
            $table->string('evt_trailer3', 13);
            $table->string('evt_trailer4', 13);
            $table->integer('stp_mfh_number')->nullable();
            $table->integer('stp_transfer_stp')->nullable();
            $table->string('evt_lghtype1', 6)->nullable();
            $table->string('evt_lghtype2', 6)->nullable();
            $table->string('evt_lghtype3', 6)->nullable();
            $table->string('evt_lghtype4', 6)->nullable();
            $table->integer('evt_mfh_number')->nullable();
            $table->string('evt_dock_worker', 8)->nullable();
            $table->integer('item_id')->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('event');
    }
};
