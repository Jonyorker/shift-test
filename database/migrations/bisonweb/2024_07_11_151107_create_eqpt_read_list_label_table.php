<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('eqpt_read_list_label', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('eqpt_read_list_id');
            $table->integer('eqpt_read_label_id');
            $table->text('note')->nullable();
            $table->tinyInteger('is_complete');
            $table->dateTime('complete_date')->nullable();
            $table->string('completed_by', 10)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('eqpt_read_list_label');
    }
};
