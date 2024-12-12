<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('chat_reasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label')->nullable()->index('ix_sqlserver_bisonweb_chatreasons_label');
            $table->string('value')->nullable();
            $table->string('dept_name')->nullable();
            $table->tinyInteger('is_active');
            $table->integer('default_queue')->nullable();
            $table->integer('is_close');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('chat_reasons');
    }
};
