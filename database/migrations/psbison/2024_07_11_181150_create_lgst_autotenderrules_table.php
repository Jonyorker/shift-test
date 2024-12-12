<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_autotenderrules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('startregion3', 6)->nullable();
            $table->string('endregion3', 6)->nullable();
            $table->string('billto', 8)->nullable();
            $table->string('shipper', 8)->nullable();
            $table->string('receiver', 8)->nullable();
            $table->decimal('targetrate', 19, 4)->nullable();
            $table->decimal('maxrate', 19, 4)->nullable();
            $table->decimal('waterfallhrs', 19, 4)->nullable();
            $table->decimal('reverseauctionhrs', 19, 4)->nullable();
            $table->integer('accepttime')->nullable();
            $table->decimal('rateweight', 19, 4)->nullable();
            $table->decimal('scorecardweight', 19, 4)->nullable();
            $table->decimal('podratingweight', 19, 4)->nullable();
            $table->integer('excludelane')->nullable();
            $table->dateTime('effectivedate')->nullable();
            $table->dateTime('enddate')->nullable();
            $table->dateTime('startbusinesshr');
            $table->dateTime('endbusinesshr');
            $table->string('ablpod', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_autotenderrules');
    }
};
