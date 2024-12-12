<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('Dims_Notify', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('DN_subject', 100)->nullable();
            $table->string('DN_To')->nullable();
            $table->string('DN_from')->nullable();
            $table->dateTime('DN_DateSent')->nullable();
            $table->string('DN_Body', 500)->nullable();
            $table->string('DN_notifyType', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('Dims_Notify');
    }
};
