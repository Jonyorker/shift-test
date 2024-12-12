<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_management_resource_component_defects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label')->nullable();
            $table->string('code')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->integer('component_id');
            $table->integer('bison_edvirmapping_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_management_resource_component_defects');
    }
};
