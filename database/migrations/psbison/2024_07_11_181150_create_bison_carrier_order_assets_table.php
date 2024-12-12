<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_carrier_order_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bison_carrier_order_id');
            $table->string('asset_type');
            $table->string('asset_id');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_carrier_order_assets');
    }
};
