<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('bison_trailer_search_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->dateTime('date_lookup');
            $table->string('trailer_number', 10);
            $table->string('ip_address', 25);
            $table->string('url');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('bison_trailer_search_history');
    }
};
