<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_id')->index('indx_users');
            $table->integer('user_list_contact_type_id');
            $table->text('value');
            $table->string('addons', 50)->nullable();
            $table->tinyInteger('is_primary');
            $table->tinyInteger('is_active');
            $table->string('country_iso_code', 10)->nullable();
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();

            $table->index(['user_list_id', 'user_list_contact_type_id'], 'indx_usercontacts');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_contact');
    }
};
