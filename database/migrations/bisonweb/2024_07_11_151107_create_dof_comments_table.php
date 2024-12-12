<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('dof_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('comments')->nullable();
            $table->string('email')->nullable();
            $table->string('emp_id', 10)->nullable();
            $table->string('stp_number', 10)->nullable();
            $table->dateTime('received_date')->nullable();
            $table->dateTime('exported_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('dof_comments');
    }
};
