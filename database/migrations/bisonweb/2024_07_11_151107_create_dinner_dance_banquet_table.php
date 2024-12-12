<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('dinner_dance_banquet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10)->index('_wa_sys_emp_id_6991a7cb');
            $table->dateTime('created_date');
            $table->string('terminal', 10)->nullable()->index('_wa_sys_terminal_6991a7cb');
            $table->string('ip_address', 30);
            $table->dateTime('event_year');
            $table->string('dietary_restriction', 50)->nullable()->index('_wa_sys_dietary_restriction_6991a7cb');
            $table->string('dietary_other', 200)->nullable()->index('_wa_sys_dietary_other_6991a7cb');
            $table->tinyInteger('plus_one');
            $table->string('guest_name', 150)->nullable();
            $table->string('dietary_restriction_guest', 50)->nullable();
            $table->string('dietary_other_guest', 200)->nullable()->index('_wa_sys_dietary_other_guest_6991a7cb');
            $table->tinyInteger('is_cancelled')->index('_wa_sys_is_cancelled_6991a7cb');
            $table->string('phone_number', 100)->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('modified_by', 10)->nullable();
            $table->tinyInteger('rating');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('dinner_dance_banquet');
    }
};
