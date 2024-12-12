<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bison_take_out_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id', 10);
            $table->string('terminal', 50);
            $table->integer('bison_take_out_menu_id')->nullable();
            $table->integer('quantity');
            $table->dateTime('order_date');
            $table->dateTime('delivery_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bison_take_out_orders');
    }
};
