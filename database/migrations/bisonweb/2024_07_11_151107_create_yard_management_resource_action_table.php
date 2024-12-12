<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_management_resource_action', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('code')->unique('indx_location');
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_locked');

            $table->unique(['code'], 'uq__yard_man__357d4cf901efbbdf');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_management_resource_action');
    }
};
