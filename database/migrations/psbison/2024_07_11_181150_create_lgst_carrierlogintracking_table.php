<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('lgst_carrierlogintracking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrierlogin_id');
            $table->string('ipaddress', 15);
            $table->dateTime('date');
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('lgst_carrierlogintracking');
    }
};
