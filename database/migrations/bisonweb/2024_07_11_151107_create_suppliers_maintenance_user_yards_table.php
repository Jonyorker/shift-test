<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('suppliers_maintenance_user_yards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id', 50)->nullable();
            $table->string('cmp_id', 8)->nullable();
            $table->tinyInteger('is_active');
            $table->dateTime('created_date');
            $table->dateTime('modified_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('suppliers_maintenance_user_yards');
    }
};
