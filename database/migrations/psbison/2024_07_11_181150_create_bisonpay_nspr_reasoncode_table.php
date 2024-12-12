<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonpay_nspr_reasoncode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label', 100);
            $table->boolean('is_active')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonpay_nspr_reasoncode');
    }
};
