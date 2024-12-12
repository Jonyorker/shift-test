<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_carrier_order_drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bison_carrier_order_id');
            $table->string('driver_id');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_carrier_order_drivers');
    }
};
