<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('customs_broker_rpa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_number');
            $table->integer('ord_hdrnumber');
            $table->string('direction', 10);
            $table->string('ord_billto', 8);
            $table->string('ace_status');
            $table->string('lgh_driver', 8)->nullable();
            $table->string('trailer_id', 13)->nullable();
            $table->string('lgh_tractor', 8)->nullable();
            $table->string('ord_shipper', 8);
            $table->integer('stp_number');
            $table->string('stp_status', 6);
            $table->string('stp_comment')->nullable();
            $table->dateTime('stp_arrivaldate');
            $table->decimal('pcs', 10)->nullable();
            $table->float('weight', 53, 0);
            $table->string('commodity', 60);
            $table->string('cmp_id', 8);
            $table->string('created_by', 60)->nullable();
            $table->dateTime('created_date');
            $table->dateTime('updated_by')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->string('processed_by')->nullable();
            $table->dateTime('processed_date')->nullable();
            $table->integer('customs_broker_package_id');
            $table->integer('fgt_number')->nullable()->unique('fgt_number');
            $table->integer('fgt_stp_number')->nullable();

            $table->unique(['fgt_number'], 'fgt_number_unique');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('customs_broker_rpa');
    }
};
