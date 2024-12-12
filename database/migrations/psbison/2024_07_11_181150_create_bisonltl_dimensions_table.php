<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonltl_dimensions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ord')->nullable();
            $table->decimal('length', 19, 4)->nullable();
            $table->decimal('width', 19, 4)->nullable();
            $table->decimal('height', 19, 4)->nullable();
            $table->integer('cnt')->nullable();
            $table->string('cmt', 100)->nullable();
            $table->integer('splitord')->nullable();
            $table->decimal('weight', 19, 4)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonltl_dimensions');
    }
};
