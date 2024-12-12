<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('hubspot_profile_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hubspot_profile_id');
            $table->integer('hubspot_resources_profile_properties_id');
            $table->text('value')->nullable();
            $table->dateTime('last_modified');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('hubspot_profile_properties');
    }
};
