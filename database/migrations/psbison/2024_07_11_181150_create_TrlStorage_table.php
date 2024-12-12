<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('TrlStorage', function (Blueprint $table) {
            $table->increments('tstg_id');
            $table->integer('stp_number')->nullable();
            $table->string('trl_id', 13);
            $table->integer('ord_hdrnumber')->nullable();
            $table->dateTime('tstg_startdate')->nullable();
            $table->boolean('tstg_billable');
            $table->string('tstg_bill_cmp', 8)->nullable();
            $table->dateTime('tstg_enddate')->nullable();
            $table->integer('TrlStorageStatusId');
            $table->string('tstg_comments')->nullable();
            $table->dateTime('tstg_lastbilldate')->nullable();
            $table->string('CreatedBy');
            $table->dateTime('CreatedDate');
            $table->string('LastUpdatedBy');
            $table->dateTime('LastUpdatedDate');
            $table->string('StorageCompanyId', 8)->nullable();
            $table->integer('BillToFreeDays')->nullable();
            $table->decimal('Rate', 19, 4)->nullable();
            $table->integer('ivh_hdrnumber')->nullable();
            $table->boolean('FreeDaysUsed')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('TrlStorage');
    }
};
