<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_cargoclaim', function (Blueprint $table) {
            $table->integer('acc_id')->nullable()->index('dk_accid');
            $table->integer('clm_id')->nullable()->index('dk_clmid');
            $table->string('clm_claimid', 15)->nullable();
            $table->tinyInteger('clm_closed')->nullable();
            $table->dateTime('clm_datereport')->nullable();
            $table->dateTime('clm_datedelivery')->nullable();
            $table->dateTime('clm_dateintent')->nullable();
            $table->dateTime('clm_dateclaim')->nullable();
            $table->tinyInteger('clm_filedontime')->nullable();
            $table->integer('ord_hdrnumber')->nullable();
            $table->string('ord_billto', 50)->nullable();
            $table->string('ord_shipper', 50)->nullable();
            $table->string('ord_consignee', 50)->nullable();
            $table->string('clm_refnumbers', 50)->nullable();
            $table->integer('clm_pieces')->nullable();
            $table->float('clm_weight', 53, 0)->nullable();
            $table->integer('clm_pallet')->nullable();
            $table->string('clm_typeofloss', 50)->nullable();
            $table->string('clm_causeofloss', 50)->nullable();
            $table->tinyInteger('clm_declined')->nullable();
            $table->string('clm_commodity', 50)->nullable();
            $table->tinyInteger('clm_prg_drvrep')->nullable();
            $table->tinyInteger('clm_prg_bol')->nullable();
            $table->tinyInteger('clm_prg_claim')->nullable();
            $table->tinyInteger('clm_prg_bisoninv')->nullable();
            $table->tinyInteger('clm_prg_bid')->nullable();
            $table->tinyInteger('clm_prg_slvgrpt')->nullable();
            $table->tinyInteger('clm_prg_pmt')->nullable();
            $table->tinyInteger('clm_prg_acct')->nullable();
            $table->tinyInteger('clm_prg_mpi')->nullable();
            $table->tinyInteger('clm_prg_rlse')->nullable();
            $table->tinyInteger('clm_prg_appr')->nullable();
            $table->tinyInteger('clm_prg_slvgrec')->nullable();
            $table->tinyInteger('clm_prg_letdrv')->nullable();
            $table->string('clm_drivernoncomp', 50)->nullable();
            $table->dateTime('clm_denydate')->nullable();
            $table->dateTime('clm_pickupdate')->nullable();
            $table->dateTime('clm_datesentappr')->nullable();
            $table->string('clm_chqnum', 20)->nullable();
            $table->dateTime('clm_datepaid')->nullable();
            $table->string('clm_claimant', 20)->nullable();
            $table->dateTime('clm_dateclosed')->nullable();
            $table->string('mpp_id', 8)->nullable();
            $table->string('clm_mpiclaim', 50)->nullable();
            $table->string('clm_source', 20)->nullable();
            $table->string('clm_trc', 10)->nullable();
            $table->string('clm_trl1', 15)->nullable();
            $table->string('clm_trl2', 15)->nullable();
            $table->dateTime('clm_lastupdate')->nullable();
            $table->string('clm_lastupdateby', 20)->nullable();
            $table->tinyInteger('clm_tp')->nullable();
            $table->tinyInteger('clm_salvage')->nullable();
            $table->string('car_id', 8)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_cargoclaim');
    }
};
