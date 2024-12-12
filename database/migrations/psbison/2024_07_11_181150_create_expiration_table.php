<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('expiration', function (Blueprint $table) {
            $table->string('exp_idtype', 3);
            $table->string('exp_id', 13)->nullable();
            $table->string('exp_code', 10)->nullable();
            $table->dateTime('exp_lastdate')->nullable();
            $table->dateTime('exp_expirationdate')->nullable();
            $table->string('exp_routeto', 12)->nullable();
            $table->string('exp_completed', 1)->nullable();
            $table->string('exp_priority', 6)->nullable();
            $table->dateTime('exp_compldate')->nullable();
            $table->string('timestamp')->nullable();
            $table->string('exp_updateby', 20)->nullable();
            $table->dateTime('exp_creatdate')->nullable();
            $table->dateTime('exp_updateon')->nullable();
            $table->string('exp_description', 100)->nullable();
            $table->integer('exp_milestoexp')->nullable();
            $table->increments('exp_key');
            $table->integer('exp_city')->nullable();
            $table->string('bis_leavereason', 6)->nullable();
            $table->string('bis_quit', 6)->nullable();
            $table->integer('bis_rehire')->nullable();
            $table->integer('mov_number')->nullable();
            $table->string('exp_control_avl_date', 1);
            $table->tinyInteger('skip_trigger')->nullable();
            $table->string('exp_auto_created', 1)->nullable();
            $table->string('exp_source', 30)->nullable();
            $table->integer('cai_id')->nullable();
            $table->integer('exp_duration')->nullable();
            $table->dateTime('exp_acceptable_start')->nullable();
            $table->dateTime('exp_acceptable_end')->nullable();
            $table->string('exp_recurrence', 6)->nullable();
            $table->integer('carriercsalogdtl_id')->nullable();
            $table->integer('trlStgID')->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('expiration');
    }
};
