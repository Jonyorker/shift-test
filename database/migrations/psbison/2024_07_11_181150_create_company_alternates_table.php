<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('company_alternates', function (Blueprint $table) {
            $table->string('ca_id', 8)->nullable();
            $table->string('ca_alt', 8)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('company_alternates');
    }
};
