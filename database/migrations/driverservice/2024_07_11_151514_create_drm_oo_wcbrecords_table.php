<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('drm_oo_wcbrecords', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('mpp_id', 8)->nullable();
            $table->string('wcb_number', 50)->nullable();
            $table->string('wcb_prov', 2)->nullable();
            $table->string('wcb_type', 5)->nullable();
            $table->dateTime('wcb_effectivedate')->nullable();
            $table->string('wcb_status', 1)->nullable();
            $table->string('wcb_unit', 50)->nullable();
            $table->string('wcb_company', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('drm_oo_wcbrecords');
    }
};
