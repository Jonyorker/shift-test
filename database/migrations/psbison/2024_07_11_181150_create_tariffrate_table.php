<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('tariffrate', function (Blueprint $table) {
            $table->string('timestamp')->nullable();
            $table->integer('tar_number')->nullable();
            $table->integer('trc_number_row');
            $table->integer('trc_number_col');
            $table->decimal('tra_rate', 19, 4)->nullable();
            $table->string('tra_apply', 1)->nullable();
            $table->dateTime('tra_retired')->nullable();
            $table->string('last_updateby', 256)->nullable();
            $table->dateTime('last_updatedate')->nullable();
            $table->dateTime('tra_activedate')->nullable();
            $table->string('tra_rateasflat', 1);
            $table->decimal('tra_minrate', 19, 4)->nullable();
            $table->string('tra_minqty', 1);
            $table->decimal('tra_billmiles', 19, 4)->nullable();
            $table->decimal('tra_paymiles', 19, 4)->nullable();
            $table->decimal('tra_standardhours', 19, 4)->nullable();
            $table->decimal('tra_mincharge', 19, 4)->nullable();
            $table->string('tra_remarks1', 254)->nullable();
            $table->string('tra_remarks2', 254)->nullable();
            $table->string('tra_remarks3', 254)->nullable();
            $table->string('tra_remarks4', 254)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('tariffrate');
    }
};
