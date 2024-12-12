<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('team_list_opt_in_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->string('opt_in')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('team_list_opt_in_notifications');
    }
};
