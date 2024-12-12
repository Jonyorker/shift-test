<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bison_logistics_yards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('yard_code')->nullable();
            $table->string('sequence_yard_code')->nullable();
            $table->string('terminal_yard_code')->nullable();
            $table->string('terminal')->nullable();
            $table->string('created_by')->nullable();
            $table->dateTime('created_date');
            $table->string('updated_by')->nullable();
            $table->dateTime('updated_date')->nullable();
            $table->tinyInteger('is_active');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bison_logistics_yards');
    }
};
