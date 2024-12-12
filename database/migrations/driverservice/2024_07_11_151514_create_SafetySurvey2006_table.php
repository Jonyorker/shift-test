<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('SafetySurvey2006', function (Blueprint $table) {
            $table->increments('SurveyID')->comment('Primary Key');
            $table->string('Type', 50)->nullable()->comment('Employee Type');
            $table->string('ePosition', 50)->nullable()->comment('Employee Position');
            $table->integer('DrivingExp')->nullable()->comment('Drivers ONLY - Years experience');
            $table->integer('BisonYears')->nullable()->comment('Years of service w/ Bison');
            $table->string('Region', 50)->nullable()->comment('Region working in');
            $table->string('Name', 100)->nullable()->comment('Name OPTIONAL');
            $table->integer('sec11a')->nullable()->comment('Section 1 Question 1A');
            $table->integer('sec11b')->nullable()->comment('Section 1 Question 1B');
            $table->integer('sec12')->nullable()->comment('Section 1 Question 2');
            $table->text('sec13')->nullable()->comment('Section 1 Question 3 (Comments)');
            $table->integer('sec24')->nullable()->comment('Section 2 Question 4');
            $table->integer('sec25')->nullable()->comment('Section 2 Question 5');
            $table->integer('sec26')->nullable()->comment('Section 2 Question 6');
            $table->integer('sec27')->nullable()->comment('Section 2 Question 7');
            $table->integer('sec28')->nullable()->comment('Section 2 Question 8');
            $table->integer('sec29')->nullable()->comment('Section 2 Question 9');
            $table->integer('sec210')->nullable()->comment('Section 2 Question 10');
            $table->integer('sec211')->nullable()->comment('Section 2 Question 11');
            $table->text('sec212')->nullable()->comment('Section 2 Question 12 (Comments)');
            $table->integer('sec313')->nullable()->comment('Section 3 Question 13');
            $table->integer('sec314')->nullable()->comment('Section 3 Question 14');
            $table->text('sec315')->nullable()->comment('Section 3 Question 15 (Comments)');
            $table->text('sec316')->nullable()->comment('Section 3 Question 16 (Comments)');
            $table->integer('sec417')->nullable()->comment('Section 4 Question 17');
            $table->integer('sec418')->nullable()->comment('Section 4 Question 18');
            $table->text('sec419')->nullable()->comment('Section 4 Question 19 (Comments)');
            $table->integer('sec520')->nullable()->comment('Section 5 Question 20 MANAGERS ONLY');
            $table->text('sec521')->nullable()->comment('Section 5 Question 21 (Comments) MANAGERS ONLY');
            $table->integer('sec6a')->nullable()->comment('Section 6 Question A');
            $table->integer('sec6b')->nullable()->comment('Section 6 Question B');
            $table->text('sec6c')->nullable()->comment('Section 6 Question C (Comments)');
            $table->text('sec6d')->nullable()->comment('Section 6 Question D (Comments)');

        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('SafetySurvey2006');
    }
};
