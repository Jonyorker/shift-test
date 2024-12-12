<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('taxrate', function (Blueprint $table) {
            $table->smallInteger('tax_type');
            $table->string('tax_state', 6)->nullable();
            $table->float('tax_rate', null, 0)->nullable();
            $table->string('tax_glnum', 32)->nullable();
            $table->dateTime('tax_effectivedate')->nullable();
            $table->dateTime('tax_expirationdate')->nullable();
            $table->increments('tax_id');
            $table->string('tax_description', 60)->nullable();
            $table->string('tax_appliesto', 1)->nullable();
            $table->string('tax_ARTaxAuth', 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('taxrate');
    }
};
