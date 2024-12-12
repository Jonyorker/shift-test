<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('city', function (Blueprint $table) {
            $table->integer('cty_code');
            $table->string('cty_name', 18);
            $table->string('cty_state', 6)->nullable();
            $table->string('cty_zip', 10)->nullable();
            $table->string('cty_areacode', 6)->nullable();
            $table->integer('cty_splc')->nullable();
            $table->string('cty_county', 3)->nullable();
            $table->decimal('cty_latitude', 14, 6)->nullable();
            $table->decimal('cty_longitude', 14, 6)->nullable();
            $table->string('cty_region1', 6)->nullable();
            $table->string('cty_region2', 6)->nullable();
            $table->string('cty_region3', 6)->nullable();
            $table->string('cty_region4', 6)->nullable();
            $table->string('cty_nmstct', 30)->nullable();
            $table->string('timestamp')->nullable();
            $table->integer('cty_comm_zone')->nullable();
            $table->string('cty_country', 4)->nullable();
            $table->string('cty_updatedby', 20)->nullable();
            $table->dateTime('cty_updateddate')->nullable();
            $table->dateTime('cty_createdate')->nullable();
            $table->string('rand_city', 25)->nullable();
            $table->string('rand_state', 2)->nullable();
            $table->string('rand_county', 2)->nullable();
            $table->string('alk_city', 50)->nullable();
            $table->string('alk_state', 2)->nullable();
            $table->string('alk_county', 15)->nullable();
            $table->smallInteger('cty_fuelcreate')->nullable();
            $table->integer('bison_latitude')->nullable();
            $table->integer('bison_longitude')->nullable();
            $table->string('bison_timezone', 3)->nullable();
            $table->string('county_name', 50)->nullable();
            $table->string('rand_county_name', 50)->nullable();
            $table->string('alk_county_name', 50)->nullable();
            $table->string('rand_verified', 1)->nullable();
            $table->dateTime('rand_verified_date')->nullable();
            $table->string('alk_verified', 1)->nullable();
            $table->dateTime('alk_verified_date')->nullable();
            $table->string('bison_USBorderCode', 5)->nullable();
            $table->float('cty_GMTDelta', 53, 0)->nullable();
            $table->string('cty_DSTApplies', 1)->nullable();
            $table->string('alk_region', 12);
            $table->smallInteger('cty_TZMins')->nullable();
            $table->integer('cty_countyfips')->nullable();
            $table->integer('cty_statefips')->nullable();
            $table->integer('cty_msa')->nullable();
            $table->string('cty_CityShort', 6)->nullable();
            $table->dateTime('cty_GeoCodeRequested')->nullable();
            $table->integer('cty_ALK_FileValidatedYR')->nullable();
            $table->string('cty_splc_char', 20)->nullable();
            $table->geometry('citypoint')->nullable();
            $table->dateTime('INS_TIMESTAMP');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('city');
    }
};
