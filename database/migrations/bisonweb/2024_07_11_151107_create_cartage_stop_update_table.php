<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cartage_stop_update', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cartage_user_id')->nullable();
            $table->string('carrier_id', 10)->nullable();
            $table->string('stop_number', 10)->nullable();
            $table->string('arrive_lat')->nullable();
            $table->string('arrive_lng')->nullable();
            $table->string('depart_lat')->nullable();
            $table->string('depart_lng')->nullable();
            $table->dateTime('arrive_date_cst')->nullable();
            $table->dateTime('depart_date_cst')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('error_message')->nullable();
            $table->tinyInteger('processed')->nullable();
            $table->string('modified_by', 10)->nullable();
            $table->tinyInteger('is_delete')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cartage_stop_update');
    }
};
