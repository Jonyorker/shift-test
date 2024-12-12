<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('intra_performance_documents', function (Blueprint $table) {
            $table->increments('id')->index('_wa_sys_id_47a6a41b');
            $table->string('emp_id', 10)->index('idx_empid');
            $table->string('file_mime', 100)->nullable()->index('_wa_sys_file_mime_47a6a41b');
            $table->integer('file_size')->nullable();
            $table->string('save_user', 10)->index('_wa_sys_save_user_24285db4');
            $table->dateTime('save_date')->index('idx_savedate');
            $table->string('save_notes')->nullable();
            $table->text('file_hash')->nullable();
            $table->string('file_ext', 10)->nullable()->index('_wa_sys_file_ext_24285db4');
            $table->tinyInteger('is_employee_visible');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('intra_performance_documents');
    }
};
