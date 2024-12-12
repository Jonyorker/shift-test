<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_vehicles', function (Blueprint $table) {
            $table->integer('acc_id')->nullable()->index('dk_accid');
            $table->integer('veh_id')->nullable();
            $table->string('veh_drvname', 50)->nullable();
            $table->string('veh_drvlicense', 20)->nullable();
            $table->string('veh_drvlicenseprov', 2)->nullable();
            $table->string('veh_drvaddress', 50)->nullable();
            $table->string('veh_drvcity', 50)->nullable();
            $table->string('veh_drvprov', 2)->nullable();
            $table->string('veh_drvphone', 20)->nullable();
            $table->string('veh_ownername', 50)->nullable();
            $table->string('veh_owneraddress', 50)->nullable();
            $table->string('veh_ownercity', 30)->nullable();
            $table->string('veh_ownerprov', 2)->nullable();
            $table->string('veh_ownerphone', 20)->nullable();
            $table->string('veh_insname', 50)->nullable();
            $table->string('veh_inspolicy', 50)->nullable();
            $table->string('veh_insaddress', 50)->nullable();
            $table->string('veh_inccity', 30)->nullable();
            $table->string('veh_insprov', 2)->nullable();
            $table->string('veh_insphone', 20)->nullable();
            $table->string('veh_number', 10)->nullable();
            $table->string('veh_plate', 10)->nullable();
            $table->string('veh_plateprov', 2)->nullable();
            $table->string('veh_serial', 50)->nullable();
            $table->string('veh_make', 20)->nullable();
            $table->string('veh_model', 20)->nullable();
            $table->string('veh_year', 4)->nullable();
            $table->text('veh_damage')->nullable();
            $table->string('veh_trailer', 20)->nullable();
            $table->string('veh_trlplate', 10)->nullable();
            $table->string('veh_trlprov', 2)->nullable();
            $table->string('veh_trlserial', 50)->nullable();
            $table->string('veh_trlmake', 20)->nullable();
            $table->string('veh_trlmodel', 20)->nullable();
            $table->string('veh_trlyear', 4)->nullable();
            $table->text('veh_trldamage')->nullable();
            $table->text('veh_propdamage')->nullable();
            $table->decimal('veh_vehest', 19, 4)->nullable();
            $table->decimal('veh_vehact', 19, 4)->nullable();
            $table->decimal('veh_vehrecov', 19, 4)->nullable();
            $table->decimal('veh_trlext', 19, 4)->nullable();
            $table->decimal('veh_trlact', 19, 4)->nullable();
            $table->decimal('veh_trlrecov', 19, 4)->nullable();
            $table->decimal('veh_propest', 19, 4)->nullable();
            $table->decimal('veh_propact', 19, 4)->nullable();
            $table->decimal('veh_proprecov', 19, 4)->nullable();
            $table->string('veh_vehpo', 50)->nullable();
            $table->string('veh_trlpo', 50)->nullable();
            $table->string('veh_proppo', 50)->nullable();
            $table->string('veh_adjuster', 50)->nullable();
            $table->string('veh_claimid', 50)->nullable();
            $table->string('veh_cost1desc', 50)->nullable();
            $table->string('veh_cost1wo', 20)->nullable();
            $table->string('veh_cost1po', 20)->nullable();
            $table->decimal('veh_cost1act', 19, 4)->nullable();
            $table->string('veh_cost2desc', 50)->nullable();
            $table->string('veh_cost2wo', 20)->nullable();
            $table->string('veh_cost2po', 20)->nullable();
            $table->decimal('veh_cost2act', 19, 4)->nullable();
            $table->string('veh_cost3desc', 50)->nullable();
            $table->string('veh_cost3wo', 20)->nullable();
            $table->string('veh_cost3po', 20)->nullable();
            $table->decimal('veh_cost3act', 19, 4)->nullable();
            $table->string('veh_cost4desc', 50)->nullable();
            $table->string('veh_cost4wo', 20)->nullable();
            $table->string('veh_cost4po', 20)->nullable();
            $table->decimal('veh_cost4act', 19, 4)->nullable();
            $table->string('veh_reg', 50)->nullable();
            $table->string('veh_trlreg', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_vehicles');
    }
};
