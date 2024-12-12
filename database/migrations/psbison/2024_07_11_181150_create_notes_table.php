<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('notes', function (Blueprint $table) {
            $table->integer('not_number');
            $table->string('not_text', 254)->nullable();
            $table->string('not_type', 6)->nullable();
            $table->string('not_urgent', 1)->nullable();
            $table->dateTime('not_senton')->nullable();
            $table->string('not_sentby', 6)->nullable();
            $table->dateTime('not_expires')->nullable();
            $table->integer('not_forwardedfrom')->nullable();
            $table->string('timestamp')->nullable();
            $table->string('ntb_table', 18)->nullable();
            $table->string('nre_tablekey', 18)->nullable();
            $table->smallInteger('not_sequence')->nullable();
            $table->string('last_updatedby', 20)->nullable();
            $table->dateTime('last_updatedatetime')->nullable();
            $table->string('autonote', 1)->nullable();
            $table->text('not_text_large')->nullable();
            $table->string('not_viewlevel', 6)->nullable();
            $table->string('not_tmsend', 1)->nullable();
            $table->string('ntb_table_copied_from', 18)->nullable();
            $table->string('nre_tablekey_copied_from', 18)->nullable();
            $table->integer('not_number_copied_from')->nullable();
            $table->boolean('not_copy_to_order')->nullable();
            $table->boolean('not_profile_only')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('notes');
    }
};
