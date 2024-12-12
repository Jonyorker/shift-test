<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('form_element_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_index_id')->nullable()->index('ix_formelementvalues_formindexid');
            $table->integer('form_element_id')->nullable()->index('ix_formelementvalues_formelementid');
            $table->string('value', 2000)->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('modified_by', 10)->nullable();

            $table->index(['form_index_id', 'form_element_id'], 'ix_formelementvalues_formindexidformelementid');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('form_element_values');
    }
};
