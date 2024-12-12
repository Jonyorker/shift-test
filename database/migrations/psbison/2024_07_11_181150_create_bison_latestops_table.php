<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_latestops', function (Blueprint $table) {
            $table->integer('stp_number')->nullable();
            $table->string('late_reasoncode', 6)->nullable();
            $table->string('late_username', 30)->nullable();
            $table->string('late_supcomment', 2000)->nullable();
            $table->integer('late_emailsent')->nullable();
            $table->integer('late_closed')->nullable();
            $table->string('late_custcomment', 2000)->nullable();
            $table->string('late_description', 2000)->nullable();
            $table->string('late_region', 6)->nullable();
            $table->string('late_driver', 8)->nullable();
            $table->dateTime('late_schdtlatest')->nullable();
            $table->tinyInteger('late_abl')->nullable();
            $table->string('late_carrier', 10)->nullable();
            $table->string('late_fleet', 6)->nullable();
            $table->dateTime('late_dateadded')->nullable();
            $table->integer('late_manual')->nullable();
            $table->string('late_owner', 10)->nullable();
            $table->string('late_fault', 20)->nullable();
            $table->integer('late_escalation')->nullable();
            $table->integer('late_custnotified')->nullable();
            $table->string('late_spoketo', 30)->nullable();
            $table->string('late_equipment', 15)->nullable();
            $table->string('late_noreason', 10)->nullable();
            $table->dateTime('late_notifysent')->nullable();
            $table->string('late_ablregion', 6)->nullable();
            $table->integer('late_bymasslrw')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_latestops');
    }
};
