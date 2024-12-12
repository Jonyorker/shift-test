<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonweb_legheader_cmp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->tinyInteger('has_alt_driver');
            $table->tinyInteger('driver');
            $table->string('fleet', 10)->nullable();
            $table->string('type2', 10)->nullable();
            $table->string('type3', 10)->nullable();
            $table->string('tractor_id', 20)->nullable();
            $table->string('trailer_id_primary', 20);
            $table->string('trailer_id_pup', 20);
            $table->integer('lgh_number')->nullable();
            $table->integer('mov_number')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->integer('drv_miles');
            $table->integer('trip_miles');
            $table->integer('drv_miles_us');
            $table->integer('trip_miles_us');
            $table->integer('drv_miles_lcv');
            $table->integer('trip_miles_lcv');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonweb_legheader_cmp');
    }
};
