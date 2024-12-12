<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('yard_management_log_action', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('yard_management_id');
            $table->integer('yard_management_reource_list_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('yard_management_log_action');
    }
};
