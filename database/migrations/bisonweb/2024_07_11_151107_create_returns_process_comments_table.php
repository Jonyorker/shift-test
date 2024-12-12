<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('returns_process_comments', function (Blueprint $table) {
            $table->increments('id')->index('ix_id_desc');
            $table->integer('returns_process_id')->index('ix_returns_process_id');
            $table->string('emp_id', 15);
            $table->dateTime('date_created');
            $table->text('comment')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('returns_process_comments');
    }
};
