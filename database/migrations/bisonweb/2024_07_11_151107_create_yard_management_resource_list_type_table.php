<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_management_resource_list_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('code')->unique('indx_location');
            $table->tinyInteger('is_active');

            $table->unique(['code'], 'uq__yard_man__357d4cf9ad963e57');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_management_resource_list_type');
    }
};
