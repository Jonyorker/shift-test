<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_carrierstopupdate', function (Blueprint $table) {
            $table->integer('lgh_number');
            $table->string('event', 50);
            $table->dateTime('arrival');
            $table->dateTime('departure')->nullable();
            $table->string('trailer', 50)->nullable();
            $table->integer('pieces')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('carrierlogin_id_old')->nullable();
            $table->dateTime('updated');
            $table->string('edited_by')->nullable();
            $table->dateTime('edited_date')->nullable();
            $table->tinyInteger('processed');
            $table->increments('id');
            $table->text('latereason')->nullable();
            $table->tinyInteger('trailerupdate')->nullable();
            $table->string('trailerlocation', 50)->nullable();
            $table->string('carrierlogin_id')->nullable();
            $table->integer('stp_number')->nullable();
            $table->tinyInteger('in_couch');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_carrierstopupdate');
    }
};
