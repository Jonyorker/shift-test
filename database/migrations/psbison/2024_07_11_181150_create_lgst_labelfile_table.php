<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_labelfile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('labeltype', 20)->nullable();
            $table->string('abbr', 6)->nullable();
            $table->string('description', 50)->nullable();
            $table->string('revtype1', 6)->nullable();
            $table->integer('active')->nullable();
            $table->string('extra1', 50)->nullable();
            $table->string('extra2', 50)->nullable();
            $table->string('extra3', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_labelfile');
    }
};
