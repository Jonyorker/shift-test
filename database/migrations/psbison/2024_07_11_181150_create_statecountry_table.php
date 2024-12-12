<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('statecountry', function (Blueprint $table) {
            $table->string('stc_state_c', 6);
            $table->string('stc_state_desc', 50)->nullable();
            $table->string('stc_country_c', 50);
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('statecountry');
    }
};
