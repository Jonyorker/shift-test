<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_todo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acc_id')->nullable()->index('dk_accid');
            $table->integer('clm_id')->nullable();
            $table->string('category', 20)->nullable();
            $table->string('createby', 50)->nullable();
            $table->dateTime('createdate')->nullable();
            $table->string('assignedto', 50)->nullable();
            $table->dateTime('requireddate')->nullable();
            $table->string('completedby', 50)->nullable();
            $table->dateTime('completeddate')->nullable();
            $table->text('notes')->nullable();
            $table->string('autoid', 6)->nullable();
            $table->string('owner', 30)->nullable();
            $table->string('lastaction', 80)->nullable();
            $table->dateTime('lastdate')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_todo');
    }
};
