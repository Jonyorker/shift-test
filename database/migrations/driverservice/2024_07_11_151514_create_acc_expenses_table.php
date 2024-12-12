<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_expenses', function (Blueprint $table) {
            $table->integer('acc_id')->nullable();
            $table->integer('clm_id')->nullable();
            $table->integer('exp_line')->nullable();
            $table->string('exp_category', 6)->nullable();
            $table->string('eqp_equipid', 10)->nullable();
            $table->string('exp_vendor', 50)->nullable();
            $table->string('exp_wo', 15)->nullable();
            $table->string('exp_po', 15)->nullable();
            $table->string('exp_gl', 15)->nullable();
            $table->float('exp_amount', 53, 0)->nullable();

            $table->index(['acc_id', 'exp_category'], 'dk_idcategory');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_expenses');
    }
};
