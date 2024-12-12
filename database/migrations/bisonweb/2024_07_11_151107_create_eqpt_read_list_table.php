<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('eqpt_read_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit_number', 100);
            $table->tinyInteger('is_trailer');
            $table->float('set_temp', null, 0)->nullable();
            $table->float('box_temp', null, 0)->nullable();
            $table->tinyInteger('is_loaded');
            $table->text('notes')->nullable();
            $table->text('comments')->nullable();
            $table->string('status', 50)->nullable();
            $table->string('terminal', 50);
            $table->dateTime('created_date');
            $table->string('created_by', 10);
            $table->dateTime('completed_on')->nullable();
            $table->integer('sort_order');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('eqpt_read_list');
    }
};
