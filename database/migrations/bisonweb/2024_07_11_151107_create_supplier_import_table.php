<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_import', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suppliers_id');
            $table->string('file_path')->nullable();
            $table->tinyInteger('is_first_row_header');
            $table->string('column_values')->nullable();
            $table->dateTime('create_date');
            $table->dateTime('processed_date')->nullable();
            $table->tinyInteger('is_processing');
            $table->integer('records_add');
            $table->integer('records_skipped');
            $table->string('column_keys');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_import');
    }
};
