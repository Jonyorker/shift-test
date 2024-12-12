<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('suppliers_maintenance_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label', 50)->nullable();
            $table->string('code', 50)->nullable();
            $table->tinyInteger('is_active')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('suppliers_maintenance_roles');
    }
};
