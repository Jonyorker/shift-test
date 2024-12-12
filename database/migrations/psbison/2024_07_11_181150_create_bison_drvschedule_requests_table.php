<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_drvschedule_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mpp_id', 10);
            $table->string('fleet', 10);
            $table->string('location');
            $table->dateTime('date');
            $table->dateTime('pta');
            $table->longText('reason');
            $table->dateTime('submit_date');
            $table->string('status');
            $table->string('update_by')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->longText('note')->nullable();
            $table->integer('pta_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_drvschedule_requests');
    }
};
