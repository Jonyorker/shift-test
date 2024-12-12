<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('CarrierCSALogDtl', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('CarrierCSALogHdr_id');
            $table->string('docket', 15);
            $table->string('comments', 1000)->nullable();
            $table->dateTime('lastupdatedate');
            $table->string('lastupdateuser', 30);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('CarrierCSALogDtl');
    }
};
