<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('load_transfer_grid', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('worksheet')->nullable();
            $table->string('order_num', 25)->nullable();
            $table->string('old_trailer_num', 50)->nullable();
            $table->dateTime('arrival_time')->nullable();
            $table->string('new_trailer_num', 50)->nullable();
            $table->string('comment')->nullable();
            $table->dateTime('departure_time')->nullable();
            $table->string('new_seal_num', 25)->nullable();
            $table->tinyInteger('transfer_completed')->nullable();
            $table->dateTime('update_date');
            $table->string('update_userid', 10)->nullable();
            $table->string('carrier', 50)->nullable();
            $table->string('customer', 50)->nullable();
            $table->string('arrival_type', 25)->nullable();
            $table->string('terminal', 25);
            $table->string('new_carrier', 50)->nullable();
            $table->string('shunt_code', 10);
            $table->tinyInteger('priority');
            $table->string('created_by_userid', 10)->nullable();
            $table->dateTime('created_on');
            $table->integer('space_remaining')->nullable();
            $table->tinyInteger('is_active');
            $table->string('deactivated_by', 10)->nullable();
            $table->text('attachment_url')->nullable();
            $table->integer('space_used')->nullable();
            $table->string('activity_type', 50)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('load_transfer_grid');
    }
};
