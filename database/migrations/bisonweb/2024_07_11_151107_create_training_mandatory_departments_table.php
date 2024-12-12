<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('training_mandatory_departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 50)->nullable();
            $table->string('org_level_three_code', 50);

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('training_mandatory_departments');
    }
};
