<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_loads', function (Blueprint $table) {
            $table->integer('load_number')->nullable();
            $table->integer('lgh_number')->nullable();
            $table->integer('ord_hdrnumber')->nullable();
            $table->string('ord_billto', 8)->nullable();
            $table->string('ord_billtoname', 100)->nullable();
            $table->string('lgh_carrier', 8)->nullable();
            $table->string('load_carriername', 50)->nullable();
            $table->string('load_contact', 50)->nullable();
            $table->string('load_fax', 50)->nullable();
            $table->float('load_linehaul', 53, 0)->nullable();
            $table->float('load_fsc', 53, 0)->nullable();
            $table->float('load_partialcost', 53, 0)->nullable();
            $table->float('load_remaintotal', 53, 0)->nullable();
            $table->float('load_sublinehaul', 53, 0)->nullable();
            $table->float('load_subfsc', 53, 0)->nullable();
            $table->float('load_subtotal', 53, 0)->nullable();
            $table->float('load_netrevenue', 53, 0)->nullable();
            $table->string('load_ponumber', 10)->nullable();
            $table->string('load_customsbroker', 80)->nullable();
            $table->text('load_instructions')->nullable();
            $table->string('load_createby', 50)->nullable();
            $table->dateTime('load_createdate')->nullable();
            $table->string('load_status', 6)->nullable();
            $table->text('load_notes')->nullable();
            $table->string('load_trailer', 13)->nullable();
            $table->integer('load_pieces')->nullable();
            $table->float('load_weight', 53, 0)->nullable();
            $table->tinyInteger('load_faxsent')->nullable();
            $table->integer('mov_number')->nullable();
            $table->float('load_accessorial', 53, 0)->nullable();
            $table->float('load_extrapu', 53, 0)->nullable();
            $table->float('load_extradrop', 53, 0)->nullable();
            $table->string('load_lastloc', 50)->nullable();
            $table->dateTime('load_lastdate')->nullable();
            $table->float('load_bisonportion', 53, 0)->nullable();
            $table->tinyInteger('load_infomissing')->nullable();
            $table->tinyInteger('load_faxback')->nullable();
            $table->dateTime('load_faxsentdate')->nullable();
            $table->string('load_faxsentby', 20)->nullable();
            $table->tinyInteger('load_loadissue')->nullable();
            $table->string('load_carriertrlnum', 15)->nullable();
            $table->string('load_carriertracingnum', 15)->nullable();
            $table->string('load_completed', 3)->nullable();
            $table->dateTime('load_faxrevised')->nullable();
            $table->string('load_faxrevisedby', 20)->nullable();
            $table->string('load_startcity', 30)->nullable();
            $table->string('load_endcity', 30)->nullable();
            $table->dateTime('load_startdate')->nullable();
            $table->dateTime('load_enddate')->nullable();
            $table->tinyInteger('load_lostorder')->nullable();
            $table->string('load_tpikePO', 10)->nullable();
            $table->text('load_issuenotes')->nullable();
            $table->float('load_transfercost', 53, 0)->nullable();
            $table->float('load_sublinehaul_US', 53, 0)->nullable();
            $table->float('load_accessorial_US', 53, 0)->nullable();
            $table->float('load_subfsc_US', 53, 0)->nullable();
            $table->float('load_extrapu_US', 53, 0)->nullable();
            $table->float('load_extradrop_US', 53, 0)->nullable();
            $table->tinyInteger('load_currency_US')->nullable();
            $table->float('load_bisonFSCportion', 53, 0)->nullable();
            $table->float('load_assetcost', 53, 0)->nullable();
            $table->dateTime('load_checkcallsent')->nullable();
            $table->text('load_carriercomment')->nullable();
            $table->string('load_carrierstatus', 3)->nullable();
            $table->tinyInteger('load_bisoncarriercode')->nullable();
            $table->dateTime('load_transferon')->nullable();
            $table->string('load_transferby', 20)->nullable();
            $table->tinyInteger('load_trailermissing')->nullable();
            $table->tinyInteger('load_tractorinterchange')->nullable();
            $table->tinyInteger('load_signedfax')->nullable();
            $table->float('load_emptymilescost', 53, 0)->nullable();
            $table->float('load_emptymilescost_us', 53, 0)->nullable();
            $table->float('load_emptymiles', 53, 0)->nullable();
            $table->tinyInteger('load_reloadavail')->nullable();
            $table->string('load_converted', 10)->nullable();
            $table->string('load_pod', 6)->nullable();
            $table->integer('load_poweronly')->nullable();
            $table->integer('load_isfmp')->nullable();
            $table->string('load_negrevreason', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_loads');
    }
};
