<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('efs_expense_carrier_money_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('efs_expense_carrier_id');
            $table->string('efs_money_code')->nullable();
            $table->string('efs_reference_number')->nullable();
            $table->integer('po_header_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('efs_expense_carrier_money_codes');
    }
};
