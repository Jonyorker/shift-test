<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('bison')->create('mailrecipients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keyname', 50)->nullable();
            $table->string('members', 800)->nullable();
            $table->string('note', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('bison')->dropIfExists('mailrecipients');
    }
};
