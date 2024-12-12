<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_invoices', function (Blueprint $table) {
            $table->integer('acc_id')->nullable()->index('dk_id');
            $table->integer('clm_id')->nullable();
            $table->integer('inv_line')->nullable();
            $table->string('inv_who', 50)->nullable();
            $table->string('inv_category', 6)->nullable();
            $table->string('inv_invoice', 15)->nullable();
            $table->float('inv_amount', 53, 0)->nullable();
            $table->float('inv_received', 53, 0)->nullable();
            $table->float('inv_unpaid', 53, 0)->nullable();
            $table->text('inv_notes')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_invoices');
    }
};
