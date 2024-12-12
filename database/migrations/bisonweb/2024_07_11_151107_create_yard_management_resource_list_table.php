<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_management_resource_list', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yard_management_resource_yard_location_id');
            $table->integer('yard_management_resource_list_type_id');
            $table->tinyInteger('is_active');
            $table->integer('sort_order');
            $table->tinyInteger('mandatory_comment');
            $table->integer('yard_management_resource_action_id')->nullable();

            $table->index(['yard_management_resource_yard_location_id', 'yard_management_resource_list_type_id', 'yard_management_resource_action_id'], 'indx_yard_resources');
            $table->unique(['yard_management_resource_yard_location_id', 'yard_management_resource_list_type_id', 'yard_management_resource_action_id'], 'unig_yard_action_list');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_management_resource_list');
    }
};
