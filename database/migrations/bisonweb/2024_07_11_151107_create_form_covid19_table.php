<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('form_covid19', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->string('ip_address');
            $table->string('employee_id', 10);
            $table->tinyInteger('have_travelled_to');
            $table->tinyInteger('traveller_close_contact');
            $table->tinyInteger('has_symptoms');
            $table->tinyInteger('travelled_oversea');
            $table->tinyInteger('travelled_usa');

            $table->unique(['employee_id', 'created_date'], 'unqi_empid');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('form_covid19');
    }
};
