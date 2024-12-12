<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bisonltl_scanning', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ltlx_order');
            $table->integer('scanned_skids');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bisonltl_scanning');
    }
};
