<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_issues', function (Blueprint $table) {
            $table->integer('iss_id')->unique('pk_issid');
            $table->string('mpp_id', 8)->nullable();
            $table->integer('act_id')->nullable()->index('dk_actid');
            $table->string('iss_cause', 6)->nullable();
            $table->string('iss_class', 15)->nullable();
            $table->string('iss_problem', 4)->nullable();
            $table->string('iss_status', 6)->nullable();
            $table->string('iss_followby', 30)->nullable();
            $table->string('iss_followname', 30)->nullable();
            $table->dateTime('iss_followdate')->nullable();
            $table->string('iss_updateby', 30)->nullable();
            $table->dateTime('iss_updatedate')->nullable();
            $table->integer('iss_notify')->nullable();
            $table->string('iss_subproblem', 50)->nullable();

            $table->index(['iss_followby', 'iss_status'], 'dk_statusfollow');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_issues');
    }
};
