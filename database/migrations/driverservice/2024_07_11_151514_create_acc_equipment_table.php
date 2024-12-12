<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_equipment', function (Blueprint $table) {
            $table->integer('acc_id')->nullable();
            $table->integer('eqp_id')->nullable();
            $table->string('eqp_equipid', 10)->nullable();
            $table->string('eqp_type', 3)->nullable();
            $table->string('eqp_plate', 50)->nullable();
            $table->string('eqp_province', 50)->nullable();
            $table->string('eqp_serial', 50)->nullable();
            $table->string('eqp_irp', 50)->nullable();
            $table->string('eqp_make', 50)->nullable();
            $table->string('eqp_model', 50)->nullable();
            $table->string('eqp_year', 50)->nullable();
            $table->string('eqp_damage', 50)->nullable();
            $table->text('eqp_dmgdescription')->nullable();
            $table->integer('eqp_towed')->nullable();
            $table->string('eqp_towedby', 50)->nullable();
            $table->string('eqp_towedto', 50)->nullable();
            $table->string('eqp_towedwo', 50)->nullable();
            $table->string('eqp_towedpo', 50)->nullable();
            $table->string('eqp_towedgl', 50)->nullable();
            $table->integer('eqp_repair')->nullable();
            $table->string('eqp_repairby', 50)->nullable();
            $table->string('eqp_repairloc', 50)->nullable();
            $table->string('eqp_repairwo', 50)->nullable();
            $table->string('eqp_repairpo', 50)->nullable();
            $table->string('eqp_repairgl', 50)->nullable();
            $table->integer('eqp_fuelspilt')->nullable();
            $table->string('eqp_fueldspiltamt', 20)->nullable();
            $table->integer('eqp_fuelcleaned')->nullable();
            $table->string('eqp_fuelcleanedby', 50)->nullable();
            $table->integer('eqp_repairscomp')->nullable();
            $table->float('eqp_repairscost', 53, 0)->nullable();
            $table->integer('eqp_repairsNWF')->nullable();
            $table->string('eqp_repairsNWFwhy', 50)->nullable();
            $table->integer('eqp_recover')->nullable();
            $table->float('eqp_dmgamtest', 53, 0)->nullable();
            $table->float('eqp_dmgamtact', 53, 0)->nullable();
            $table->float('eqp_dmgamtrecov', 53, 0)->nullable();
            $table->float('eqp_towamtest', 53, 0)->nullable();
            $table->float('eqp_towamtact', 53, 0)->nullable();
            $table->float('eqp_towamtrecov', 53, 0)->nullable();
            $table->float('eqp_repamtest', 53, 0)->nullable();
            $table->float('eqp_repamtact', 53, 0)->nullable();
            $table->float('eqp_repamtrecov', 53, 0)->nullable();
            $table->float('eqp_fuelamtest', 53, 0)->nullable();
            $table->float('eqp_fuelamtact', 53, 0)->nullable();
            $table->float('eqp_fuelamtrecov', 53, 0)->nullable();
            $table->float('eqp_totalact', 53, 0)->nullable();
            $table->float('eqp_totalest', 53, 0)->nullable();
            $table->float('eqp_totalrecov', 53, 0)->nullable();
            $table->tinyInteger('eqp_trlloaded')->nullable();
            $table->string('eqp_trlcontents', 50)->nullable();
            $table->tinyInteger('eqp_trlcargodmg')->nullable();
            $table->tinyInteger('eqp_trlleft')->nullable();
            $table->integer('eqp_trlleftdays')->nullable();
            $table->integer('eqp_trllefthrs')->nullable();
            $table->tinyInteger('eqp_trloffloaded')->nullable();
            $table->string('eqp_trloffloadby', 50)->nullable();
            $table->string('eqp_trloffloadto', 50)->nullable();
            $table->string('eqp_trlgoodsto', 50)->nullable();
            $table->string('eqp_trlgoodsby', 50)->nullable();
            $table->string('eqp_cost1desc', 50)->nullable();
            $table->string('eqp_cost1wo', 20)->nullable();
            $table->string('eqp_cost1po', 20)->nullable();
            $table->decimal('eqp_cost1act', 19, 4)->nullable();
            $table->string('eqp_cost2desc', 50)->nullable();
            $table->string('eqp_cost2wo', 20)->nullable();
            $table->string('eqp_cost2po', 20)->nullable();
            $table->decimal('eqp_cost2act', 19, 4)->nullable();
            $table->string('eqp_cost3desc', 50)->nullable();
            $table->string('eqp_cost3wo', 20)->nullable();
            $table->string('eqp_cost3po', 20)->nullable();
            $table->decimal('eqp_cost3act', 19, 4)->nullable();
            $table->string('eqp_cost4desc', 50)->nullable();
            $table->string('eqp_cost4wo', 20)->nullable();
            $table->string('eqp_cost4po', 20)->nullable();
            $table->decimal('eqp_cost4act', 19, 4)->nullable();
            $table->string('eqp_owner', 4)->nullable();
            $table->smallInteger('eqp_writeoff')->nullable();
            $table->tinyInteger('eqp_estimate')->nullable();
            $table->tinyInteger('eqp_repaircmp')->nullable();

            $table->index(['acc_id', 'eqp_type'], 'dk_idtype');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_equipment');
    }
};
