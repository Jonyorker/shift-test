<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('form_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_id')->nullable()->index('ix_formelement_formid');
            $table->integer('element_id')->nullable()->index('ix_formelement_elementid');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();

            $table->index(['form_id', 'element_id'], 'ix_formelement_formidelementid');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('form_elements');
    }
};
