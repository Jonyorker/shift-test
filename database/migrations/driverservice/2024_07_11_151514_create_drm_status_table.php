<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_status', function (Blueprint $table) {
            $table->increments('st_id');
            $table->string('mpp_id', 8)->nullable()->index('dk_mppid');
            $table->string('st_status', 6)->nullable();
            $table->dateTime('st_startdate')->nullable();
            $table->dateTime('st_enddate')->nullable();
            $table->dateTime('st_updated')->nullable();
            $table->string('st_updatedby', 30)->nullable();
            $table->text('st_comment')->nullable();
            $table->integer('st_rehire')->nullable();
            $table->string('st_leavereason', 6)->nullable();
            $table->string('st_quit', 6)->nullable();
            $table->string('st_oldvalue', 10)->nullable();
            $table->string('st_newvalue', 10)->nullable();
            $table->integer('st_rehiredDriver')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_status');
    }
};
