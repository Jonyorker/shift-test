<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('SafetySurvey2007', function (Blueprint $table) {
            $table->increments('SurveyID');
            $table->string('Type', 50)->nullable();
            $table->string('ePosition', 50)->nullable();
            $table->integer('DrivingExp')->nullable();
            $table->integer('BisonYears')->nullable();
            $table->string('Region', 50)->nullable();
            $table->string('Name', 100)->nullable();
            $table->integer('Sec11')->nullable();
            $table->integer('Sec12')->nullable();
            $table->integer('Sec13')->nullable();
            $table->text('Sec14')->nullable();
            $table->integer('Sec25')->nullable();
            $table->integer('Sec26')->nullable();
            $table->integer('Sec27')->nullable();
            $table->integer('Sec28')->nullable();
            $table->integer('Sec29')->nullable();
            $table->integer('Sec210')->nullable();
            $table->integer('Sec211')->nullable();
            $table->text('Sec212')->nullable();
            $table->integer('Sec313')->nullable();
            $table->integer('Sec314')->nullable();
            $table->text('Sec315')->nullable();
            $table->text('Sec316')->nullable();
            $table->integer('Sec417')->nullable();
            $table->integer('Sec418')->nullable();
            $table->text('Sec419')->nullable();
            $table->integer('Sec520')->nullable();
            $table->text('Sec521')->nullable();
            $table->integer('Sec622')->nullable();
            $table->text('Sec623')->nullable();
            $table->text('Sec725')->nullable();
            $table->integer('Sec826')->nullable();
            $table->text('Sec827')->nullable();
            $table->integer('Sec9a')->nullable();
            $table->integer('Sec9b')->nullable();
            $table->text('Sec9c')->nullable();
            $table->text('Sec9d')->nullable();
            $table->integer('Sec724')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('SafetySurvey2007');
    }
};
