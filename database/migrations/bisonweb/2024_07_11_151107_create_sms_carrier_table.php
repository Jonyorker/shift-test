<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('sms_carrier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carrier', 150);
            $table->string('address');
            $table->integer('sort');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('sms_carrier');
    }
};
