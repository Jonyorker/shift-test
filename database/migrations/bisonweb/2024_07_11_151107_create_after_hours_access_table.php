<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('after_hours_access', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->index('emp_id');
            $table->string('organization_code');
            $table->string('created_by', 10);
            $table->dateTime('created_on');
            $table->string('terminal');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('after_hours_access');
    }
};
