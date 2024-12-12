<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_reference', function (Blueprint $table) {
            $table->string('NAME', 50);
            $table->string('COMPANY', 50);
            $table->string('ADDRESS', 50)->nullable();
            $table->string('TELE', 50)->nullable();
            $table->string('CONTACT', 50)->nullable();
            $table->dateTime('DSTART')->nullable();
            $table->dateTime('DFINISH')->nullable();
            $table->smallInteger('DRVSTRGHT')->nullable();
            $table->smallInteger('DRVTRACTOR')->nullable();
            $table->string('DRVOTHER', 100)->nullable();
            $table->text('CARE')->nullable();
            $table->text('ACCIDENTS')->nullable();
            $table->text('ERRORS')->nullable();
            $table->text('PAPER')->nullable();
            $table->text('RELIABLE')->nullable();
            $table->text('HABITS')->nullable();
            $table->smallInteger('MTNS')->nullable();
            $table->smallInteger('US')->nullable();
            $table->smallInteger('WINTER')->nullable();
            $table->text('AMGMT')->nullable();
            $table->text('ACUST')->nullable();
            $table->text('AWORK')->nullable();
            $table->text('PROBS')->nullable();
            $table->text('INJURIES')->nullable();
            $table->text('REASON')->nullable();
            $table->text('REHIRE')->nullable();
            $table->text('REMARKS')->nullable();
            $table->increments('ID');
            $table->smallInteger('TORONTO')->nullable();
            $table->smallInteger('RECENT')->nullable();
            $table->string('DRVMILES', 20)->nullable();
            $table->smallInteger('DRVMILESTYPE')->nullable();
            $table->integer('COMPSIZE')->nullable();
            $table->text('EQKNOW')->nullable();
            $table->text('AREAOFOP')->nullable();
            $table->text('TRIPLENGTH')->nullable();
            $table->smallInteger('COMPLETED')->nullable();

            $table->unique(['NAME', 'COMPANY'], 'pk_namecompany');
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_reference');
    }
};
