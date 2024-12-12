<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_related_person_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_related_person_id');
            $table->integer('user_list_contact_type_id');
            $table->string('value')->nullable();
            $table->string('addons')->nullable();
            $table->string('country_iso_code')->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_primary');
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();

            $table->index(['user_list_related_person_id', 'value'], 'ix_userlistrelatedpersonid_value');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_related_person_contact');
    }
};
