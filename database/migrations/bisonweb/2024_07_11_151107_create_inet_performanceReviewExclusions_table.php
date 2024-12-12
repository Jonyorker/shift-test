<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('inet_performanceReviewExclusions', function (Blueprint $table) {
            $table->string('emp_id', 10)->index('_wa_sys_emp_id_46b27fe2');
            $table->string('reason', 100)->nullable();
            $table->tinyInteger('probationary')->nullable()->index('_wa_sys_probationary_46b27fe2');
            $table->tinyInteger('interim')->nullable()->index('_wa_sys_interim_46b27fe2');
            $table->tinyInteger('annual')->nullable()->index('_wa_sys_annual_46b27fe2');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('inet_performanceReviewExclusions');
    }
};
