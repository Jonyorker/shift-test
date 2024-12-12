<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('hubspot_resources_profile_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->index('hubspot_resources_profile_properties');
            $table->string('label')->nullable();

            $table->unique(['code'], 'uq__hubspot___357d4cf9d60ad75c');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('hubspot_resources_profile_properties');
    }
};
