<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('training_mandatory_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 50);
            $table->integer('bison_training_company_id');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('training_mandatory_companies');
    }
};
