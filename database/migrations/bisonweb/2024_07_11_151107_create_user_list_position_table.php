<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_position', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_company_id')->index('ix_sqlserver_bisonweb_userlistposition_userlistcompanyid');
            $table->tinyInteger('is_primary');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->string('terminal', 50)->nullable();
            $table->string('org_level_one')->nullable();
            $table->string('org_level_two')->nullable();
            $table->string('job_title')->nullable();
            $table->string('reports_to', 20)->nullable();
            $table->string('fleet')->nullable();
            $table->tinyInteger('is_supervisor');
            $table->tinyInteger('is_driver_supervisor');
            $table->tinyInteger('is_mechanic');
            $table->tinyInteger('is_warehouse');
            $table->tinyInteger('is_driver');
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
            $table->string('pay_identifier')->nullable();
            $table->string('time_type')->nullable();
            $table->string('job_profile')->nullable();

            $table->index(['user_list_company_id', 'is_primary'], 'ix_sqlserver_bisonweb_userlistposition_userlistcompanyid_isprimary');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_position');
    }
};
