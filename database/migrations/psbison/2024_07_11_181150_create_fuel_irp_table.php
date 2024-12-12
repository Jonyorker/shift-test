<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('fuel_irp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trc_number', 10);
            $table->string('state', 2);
            $table->float('distance', 53, 0);
            $table->string('distance_type', 2);
            $table->float('pct_total', 53, 0);
            $table->string('trc_company', 6)->nullable();
            $table->dateTime('dt_start');
            $table->dateTime('dt_end');
            $table->float('fuel_litres', 53, 0)->nullable();
            $table->float('toll_km', 53, 0)->nullable();
            $table->float('litres_burned', 53, 0)->nullable();
            $table->float('tax_amount', 53, 0)->nullable();
            $table->float('KMLitre_rate', 53, 0)->nullable();
            $table->string('revtype1', 6)->nullable();
            $table->decimal('tax_rate', 12, 5)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('fuel_irp');
    }
};
