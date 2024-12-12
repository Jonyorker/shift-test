<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('load_board_driver_tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('lgh_number')->nullable();
            $table->dateTime('created_date');
            $table->string('created_by')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('driver_code', 30)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('load_board_driver_tracking');
    }
};
