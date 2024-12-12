<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_drvschedule', function (Blueprint $table) {
            $table->increments('sch_id');
            $table->string('mpp_id', 8)->nullable();
            $table->string('sch_type', 12)->nullable();
            $table->dateTime('sch_apptdate')->nullable();
            $table->string('sch_location', 50)->nullable();
            $table->text('sch_reason')->nullable();
            $table->dateTime('sch_availdate')->nullable();
            $table->string('sch_enterby', 20)->nullable();
            $table->dateTime('sch_enterdate')->nullable();
            $table->dateTime('sch_startrange')->nullable();
            $table->dateTime('sch_endrange')->nullable();
            $table->string('sch_status', 3)->nullable();
            $table->string('crs_id', 6)->nullable();
            $table->integer('cls_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_drvschedule');
    }
};
