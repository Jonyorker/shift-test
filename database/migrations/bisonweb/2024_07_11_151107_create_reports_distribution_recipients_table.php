<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('reports_distribution_recipients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('distribution_id')->nullable();
            $table->string('employee_id')->nullable();
            $table->string('email_address')->nullable();
            $table->boolean('is_cc')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('reports_distribution_recipients');
    }
};
