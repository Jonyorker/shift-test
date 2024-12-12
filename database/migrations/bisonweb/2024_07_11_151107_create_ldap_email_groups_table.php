<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('ldap_email_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique('uq__ldap_ema__ab6e6164c066f090');
            $table->string('domian');
            $table->text('distinguished_name')->nullable();
            $table->text('members')->nullable();
            $table->integer('APP_DIMS')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('ldap_email_groups');
    }
};
