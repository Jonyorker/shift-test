<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('notification_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_code', 100);
            $table->string('user_type', 100);
            $table->integer('bison_employee_contact_id');
            $table->string('contact_value')->nullable();
            $table->string('contact_type', 50);
            $table->integer('sms_carrier_id')->nullable();
            $table->dateTime('created_on');
            $table->tinyInteger('is_active');
            $table->string('activation_code')->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('notification_user');
    }
};
