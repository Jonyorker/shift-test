<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_recovery', function (Blueprint $table) {
            $table->integer('acc_id')->nullable();
            $table->integer('clm_id')->nullable();
            $table->integer('rec_line')->nullable();
            $table->string('rec_category', 6)->nullable();
            $table->string('eqp_equipid', 10)->nullable();
            $table->float('rec_deduct', 53, 0)->nullable();
            $table->float('rec_estimate', 53, 0)->nullable();
            $table->float('rec_actual', 53, 0)->nullable();
            $table->float('rec_recovmpi', 53, 0)->nullable();
            $table->float('rec_recovtp', 53, 0)->nullable();
            $table->float('rec_recovoo', 53, 0)->nullable();
            $table->float('rec_actrecovmpi', 53, 0)->nullable();
            $table->float('rec_actrecovtp', 53, 0)->nullable();
            $table->float('rec_actrecovoo', 53, 0)->nullable();
            $table->float('rec_recovSal', 53, 0)->nullable();
            $table->float('rec_actrecovSal', 53, 0)->nullable();
            $table->float('cost_actual', 53, 0)->nullable();
            $table->float('cost_recovered', 53, 0)->nullable();
            $table->float('cost_mpidirect', 53, 0)->nullable();
            $table->float('cost_otherdirect', 53, 0)->nullable();
            $table->dateTime('rec_updatedate')->nullable();
            $table->string('rec_updateby', 30)->nullable();

            $table->index(['acc_id', 'rec_category'], 'dk_idcategory');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_recovery');
    }
};
