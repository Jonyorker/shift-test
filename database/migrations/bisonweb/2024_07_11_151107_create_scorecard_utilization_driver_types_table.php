<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('scorecard_utilization_driver_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type1', 10);
            $table->string('lh_sh_city', 6)->nullable();
            $table->string('ngt_day_expe', 6)->nullable();
            $table->string('dfp_vet_ici', 6)->nullable();
            $table->string('tp_sg', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('scorecard_utilization_driver_types');
    }
};
