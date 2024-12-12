<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_carrierextra', function (Blueprint $table) {
            $table->string('car_id', 8);
            $table->string('car_ownercsr', 20)->nullable();
            $table->string('car_terms', 200)->nullable();
            $table->string('car_freq', 20)->nullable();
            $table->text('car_services')->nullable();
            $table->text('car_validation')->nullable();
            $table->dateTime('car_validationdt')->nullable();
            $table->text('car_processflow')->nullable();
            $table->text('car_comments')->nullable();
            $table->decimal('car_cartrate', 19, 4)->nullable();
            $table->decimal('car_cartfsc', 19, 4)->nullable();
            $table->dateTime('car_lastedit')->nullable();
            $table->string('car_lasteditby', 20)->nullable();
            $table->string('car_validationby', 20)->nullable();
            $table->string('car_parent', 8)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_carrierextra');
    }
};
