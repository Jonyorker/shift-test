<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('product', function (Blueprint $table) {
            $table->increments('Id');
            $table->text('Name');
            $table->text('Description');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('product');
    }
};
