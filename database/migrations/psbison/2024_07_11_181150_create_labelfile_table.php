<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('labelfile', function (Blueprint $table) {
            $table->string('labeldefinition', 20);
            $table->string('name', 20);
            $table->string('abbr', 6);
            $table->integer('code')->nullable();
            $table->string('locked', 1)->nullable();
            $table->string('userlabelname', 20)->nullable();
            $table->string('edicode', 6)->nullable();
            $table->string('timestamp')->nullable();
            $table->string('systemcode', 1)->nullable();
            $table->string('retired', 1)->nullable();
            $table->string('inventory_item', 1)->nullable();
            $table->string('acct_db', 10)->nullable();
            $table->string('ic_clear_glnum', 66)->nullable();
            $table->string('acct_server', 20)->nullable();
            $table->string('pyt_itemcode', 6)->nullable();
            $table->string('auto_complete', 1)->nullable();
            $table->string('teamleader_email', 50)->nullable();
            $table->string('exclude_from_creditcheck', 1)->nullable();
            $table->string('label_extrastring1', 60)->nullable();
            $table->string('label_extrastring2', 60)->nullable();
            $table->string('create_move', 1)->nullable();
            $table->string('param1', 60)->nullable();
            $table->string('param2', 60)->nullable();
            $table->string('param1_label', 60)->nullable();
            $table->string('param2_label', 60)->nullable();
            $table->string('label_extrastring1_label', 60)->nullable();
            $table->string('label_extrastring2_label', 60)->nullable();
            $table->string('label_extrastring3', 60)->nullable();
            $table->string('label_extrastring4', 60)->nullable();
            $table->string('label_extrastring5', 60)->nullable();
            $table->string('label_extrastring6', 60)->nullable();
            $table->string('global_label', 1)->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('labelfile');
    }
};
