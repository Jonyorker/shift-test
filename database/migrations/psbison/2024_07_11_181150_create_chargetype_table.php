<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('chargetype', function (Blueprint $table) {
            $table->integer('cht_number');
            $table->string('cht_itemcode', 6);
            $table->string('cht_description', 30);
            $table->string('cht_primary', 1);
            $table->string('cht_basis', 6);
            $table->string('cht_basisunit', 6)->nullable();
            $table->float('cht_basisper', 53, 0)->nullable();
            $table->float('cht_quantity', 53, 0)->nullable();
            $table->string('cht_rateunit', 6)->nullable();
            $table->string('cht_unit', 6)->nullable();
            $table->decimal('cht_rate', 19, 4)->nullable();
            $table->string('cht_editflag', 6)->nullable();
            $table->string('cht_glnum', 32)->nullable();
            $table->binary('timestamp')->nullable();
            $table->smallInteger('cht_sign')->nullable();
            $table->string('cht_systemcode', 1)->nullable();
            $table->string('cht_edicode', 6)->nullable();
            $table->string('cht_taxtable1', 1)->nullable();
            $table->string('cht_taxtable2', 1)->nullable();
            $table->string('cht_taxtable3', 1)->nullable();
            $table->string('cht_taxtable4', 1)->nullable();
            $table->string('cht_currunit', 6)->nullable();
            $table->string('cht_remark', 254)->nullable();
            $table->integer('cht_rollintolh')->nullable();
            $table->string('cht_retired', 1)->nullable();
            $table->float('cht_maxrate', 53, 0)->nullable();
            $table->integer('cht_maxenf')->nullable();
            $table->float('cht_minrate', 53, 0)->nullable();
            $table->integer('cht_minenf')->nullable();
            $table->integer('cht_zeroenf')->nullable();
            $table->smallInteger('cht_crchg')->nullable();
            $table->string('cht_class', 6)->nullable();
            $table->string('cht_rateprotect', 1)->nullable();
            $table->smallInteger('gp_tax')->nullable();
            $table->string('last_updateby', 256)->nullable();
            $table->dateTime('last_updatedate')->nullable();
            $table->string('cht_typeofcharge', 6)->nullable();
            $table->string('cht_lh_min', 1)->nullable();
            $table->string('cht_lh_rev', 1)->nullable();
            $table->string('cht_lh_stl', 1)->nullable();
            $table->string('cht_lh_rpt', 1)->nullable();
            $table->string('cht_lh_prn', 1)->nullable();
            $table->string('cht_paperwork_requiretype', 1)->nullable();
            $table->string('cht_allocation_method', 6)->nullable();
            $table->string('cht_allocation_criteria', 6)->nullable();
            $table->string('cht_allocation_groupby', 6)->nullable();
            $table->string('cht_allocation_group_nbr', 6)->nullable();
            $table->string('cht_setrevfromchargetypelist', 254)->nullable();
            $table->string('cht_edit_completion_rate', 1)->nullable();
            $table->string('cht_category1', 6)->nullable();
            $table->string('cht_category2', 6)->nullable();
            $table->string('cht_category3', 6)->nullable();
            $table->string('cht_category4', 6)->nullable();
            $table->string('cht_translation', 19)->nullable();
            $table->string('cht_glkey', 12)->nullable();
            $table->integer('cht_ChargeTypeBasisUnitRule_Id')->nullable();
            $table->decimal('cht_ICpercentage', 19, 4)->nullable();
            $table->string('ltl_chargetype', 1)->nullable();
            $table->string('ops_chargetype', 1)->nullable();
            $table->boolean('cht_excludefrcarrevdisplay')->nullable();
            $table->string('cht_exclude_3pp', 1)->nullable();
            $table->dateTime('INS_TIMESTAMP');
            $table->string('DW_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('chargetype');
    }
};
