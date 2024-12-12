<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_carrier_discount', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('CarrierID', 8)->nullable();
            $table->float('Discount', 53, 0)->nullable();
            $table->dateTime('ActivateDate')->nullable();
            $table->integer('Inactive')->nullable();
            $table->string('APVendorID', 8)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_carrier_discount');
    }
};
