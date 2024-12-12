<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('safescore_proj', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('mpp_id', 10)->nullable();
            $table->char('dt', 10)->nullable();
            $table->decimal('projscore', 19, 4)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('safescore_proj');
    }
};
