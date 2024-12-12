<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('border_wait_times', function (Blueprint $table) {
            $table->increments('id');
            $table->string('port_number', 100);
            $table->string('border', 50);
            $table->string('location');
            $table->string('hours_of_operation')->nullable();
            $table->dateTime('last_updated');
            $table->integer('commercial_lans')->nullable();
            $table->string('std_status')->nullable();
            $table->integer('std_delay')->nullable();
            $table->integer('std_open')->nullable();
            $table->string('fast_status')->nullable();
            $table->integer('fast_delay')->nullable();
            $table->integer('fast_open')->nullable();
            $table->integer('cty_code')->nullable();

            $table->index(['port_number', 'last_updated'], 'port_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('border_wait_times');
    }
};
