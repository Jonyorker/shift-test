<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('equipment_track_budget_rental_trailers', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_date');
            $table->decimal('monthly_budget', 19, 4);
            $table->dateTime('monthly_date');
            $table->string('created_by', 10)->nullable();
            $table->string('updated_by', 10)->nullable();
            $table->dateTime('updated_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('equipment_track_budget_rental_trailers');
    }
};
