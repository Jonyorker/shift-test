<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('returns_process_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('returns_process_id');
            $table->string('document_name', 25);
            $table->string('document_url');
            $table->string('emp_id', 15);
            $table->dateTime('date_created');
            $table->string('file_type', 25)->nullable();
            $table->decimal('file_size', 15, 0)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('returns_process_documents');
    }
};
