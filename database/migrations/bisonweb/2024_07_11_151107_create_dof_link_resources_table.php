<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('dof_link_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dof_comments_id');
            $table->integer('dof_resources_id');
            $table->boolean('value');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('dof_link_resources');
    }
};
