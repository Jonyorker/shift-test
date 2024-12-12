<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('rbac_application_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('application_name', 100)->nullable();
            $table->text('computer_name')->nullable();
            $table->string('nt_id', 50)->nullable();
            $table->text('shared_key');
            $table->dateTime('expire_on')->nullable();
            $table->dateTime('last_used')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('rbac_application_tokens');
    }
};
