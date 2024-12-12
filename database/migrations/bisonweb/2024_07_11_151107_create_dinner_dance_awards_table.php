<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('dinner_dance_awards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->index('_wa_sys_emp_id_1fedb87c');
            $table->dateTime('year_created')->index('_wa_sys_year_created_1fedb87c');
            $table->string('award', 200)->index('_wa_sys_award_1fedb87c');
            $table->string('note')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('dinner_dance_awards');
    }
};
