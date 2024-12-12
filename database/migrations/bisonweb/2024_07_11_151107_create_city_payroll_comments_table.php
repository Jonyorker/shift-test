<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('city_payroll_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->string('ip_address', 30);
            $table->dateTime('created_date');
            $table->integer('mov_number');
            $table->string('cmp_id', 8);
            $table->string('stp_event', 6);
            $table->string('comment');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('city_payroll_comments');
    }
};
