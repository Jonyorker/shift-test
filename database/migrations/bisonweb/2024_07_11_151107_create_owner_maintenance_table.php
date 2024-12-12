<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('owner_maintenance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->string('unit_number');
            $table->dateTime('mainteance_date');
            $table->integer('maintenance_record_id')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('owner_maintenance');
    }
};
