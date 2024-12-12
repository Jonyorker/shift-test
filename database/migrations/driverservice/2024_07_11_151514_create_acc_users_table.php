<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('acc_users', function (Blueprint $table) {
            $table->string('usr_id', 20)->nullable();
            $table->string('usr_fullname', 50)->nullable();
            $table->string('usr_password', 20)->nullable();
            $table->string('usr_rights', 50)->nullable();
            $table->tinyInteger('usr_assignfollow')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('acc_users');
    }
};
