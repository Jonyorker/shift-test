<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('customs_broker_package', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_uuid')->nullable();
            $table->dateTime('date_received')->nullable();
            $table->string('status', 10);
            $table->integer('move_number')->nullable()->index('indx_movenumber');
            $table->integer('order_number')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('date_sent')->nullable();
            $table->dateTime('date_confirmed')->nullable();
            $table->dateTime('date_warning_sent')->nullable();
            $table->integer('broker_tracing_rpa_status')->nullable();
            $table->string('rpa_result')->nullable();
            $table->integer('rpa_result_count')->nullable();
            $table->dateTime('date_rpa_last_check')->nullable();
            $table->integer('fax_tracking_id')->nullable();
            $table->dateTime('broker_send_date')->nullable();
            $table->integer('broker_id')->nullable();
            $table->string('broker_name', 64)->nullable();
            $table->string('broker_fax', 30)->nullable();
            $table->string('broker_loc', 30)->nullable();
            $table->string('broker_email', 300)->nullable();
            $table->string('tractor', 8)->nullable();
            $table->string('tractor_license', 12)->nullable();
            $table->string('trailer', 13)->nullable();
            $table->string('trailer_license', 12)->nullable();
            $table->dateTime('target_clearance_time')->nullable();
            $table->string('ace_status')->nullable();
            $table->string('assigned_to')->nullable();
            $table->string('delv_instruction')->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('actioned')->nullable();
            $table->string('lgh_driver', 8)->nullable();
            $table->integer('rpa_manifest_status')->nullable();
            $table->string('updated_by')->nullable();
            $table->dateTime('updated_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('customs_broker_package');
    }
};
