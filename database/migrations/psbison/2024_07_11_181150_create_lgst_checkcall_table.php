<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_checkcall', function (Blueprint $table) {
            $table->integer('load_number')->nullable();
            $table->integer('lgh_number')->nullable();
            $table->string('ckc_location')->nullable();
            $table->dateTime('ckc_datetime')->nullable();
            $table->string('ckc_addby')->nullable();
            $table->dateTime('ckc_adddate')->nullable();
            $table->dateTime('iceman_pickupeta')->nullable();
            $table->dateTime('iceman_deliveryeta')->nullable();
            $table->tinyInteger('iceman_viewed')->nullable();
            $table->text('iceman_latereason')->nullable();
            $table->string('iceman_trailer', 50)->nullable();
            $table->integer('iceman_pieces')->nullable();
            $table->integer('iceman_weight')->nullable();
            $table->integer('stp_number')->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->tinyInteger('in_couch');
            $table->string('edited_by', 100)->nullable();
            $table->dateTime('edited_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_checkcall');
    }
};
