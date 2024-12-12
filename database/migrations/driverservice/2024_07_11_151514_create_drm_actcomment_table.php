<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_actcomment', function (Blueprint $table) {
            $table->integer('act_id')->nullable();
            $table->increments('cmt_id')->unique('pk_cmtid');
            $table->text('cmt_text')->nullable();
            $table->string('cmt_by', 30)->nullable();
            $table->dateTime('cmt_date')->nullable();
            $table->string('cmt_type', 1)->nullable();
            $table->binary('cmt_data')->nullable();

            $table->index(['act_id', 'cmt_date'], 'dk_actid');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_actcomment');
    }
};
