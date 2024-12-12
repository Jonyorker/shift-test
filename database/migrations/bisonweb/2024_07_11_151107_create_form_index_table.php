<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('form_index', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_id')->nullable()->index('ix_formindex_formid');
            $table->integer('index_key')->nullable();
            $table->string('emp_id', 10)->nullable();
            $table->dateTime('created_date')->nullable();

            $table->index(['form_id', 'index_key'], 'ix_formindex_formidindexkey');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('form_index');
    }
};
