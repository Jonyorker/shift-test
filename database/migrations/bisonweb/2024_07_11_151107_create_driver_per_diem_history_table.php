<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('driver_per_diem_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mpp_id', 10);
            $table->date('cc_date');
            $table->dateTime('cc_datetime');
            $table->decimal('cc_latitude', 10, 4);
            $table->decimal('cc_longitude', 10, 4);
            $table->decimal('pd_latitude', 10, 4);
            $table->decimal('pd_longitude', 10, 4);
            $table->boolean('in_per_diem_cty');

            $table->index(['mpp_id', 'cc_date', 'in_per_diem_cty'], 'indx_perdiembyday_copy1');
            $table->unique(['mpp_id', 'cc_datetime', 'cc_latitude', 'cc_longitude', 'pd_latitude', 'pd_longitude'], 'uq__driver_p__dac27565b26d7899');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('driver_per_diem_history');
    }
};
