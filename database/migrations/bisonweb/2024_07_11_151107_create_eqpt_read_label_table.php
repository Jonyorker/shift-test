<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('eqpt_read_label', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label', 100);
            $table->string('code', 50)->nullable();
            $table->integer('parent_id');
            $table->integer('sort_order');
            $table->string('addon_type', 100)->nullable();
            $table->integer('clone_id');
            $table->tinyInteger('is_active');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('eqpt_read_label');
    }
};
