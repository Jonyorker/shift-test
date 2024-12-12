<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_access', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id');
            $table->string('access', 100);

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_access');
    }
};
