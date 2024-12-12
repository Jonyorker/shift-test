<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_identity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_id')->index('ix_sqlserver_bisonweb_userlistidentity_userlistid');
            $table->integer('user_list_identity_type_id')->index('ix_sqlserver_bisonweb_userlistidentity_userlistidentitytypeid');
            $table->text('value');
            $table->tinyInteger('is_active');
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_identity');
    }
};
