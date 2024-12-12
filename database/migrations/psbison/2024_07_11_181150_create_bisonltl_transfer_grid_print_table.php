<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonltl_transfer_grid_print', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_number')->nullable();
            $table->integer('leg_number')->nullable();
            $table->integer('po_number')->nullable();
            $table->dateTime('printed_date');
            $table->string('printed_by', 10);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonltl_transfer_grid_print');
    }
};
