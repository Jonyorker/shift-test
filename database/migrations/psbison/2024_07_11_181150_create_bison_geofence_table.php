<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_geofence', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cmpid', 8)->nullable();
            $table->integer('vertex')->nullable();
            $table->float('lat', 53, 0)->nullable();
            $table->float('lng', 53, 0)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_geofence');
    }
};
