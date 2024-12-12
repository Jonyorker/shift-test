<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_related_person_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_related_person_id');
            $table->string('type')->nullable();
            $table->tinyInteger('is_primary')->nullable();
            $table->tinyInteger('is_active');
            $table->integer('priority')->nullable();
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
            $table->integer('user_list_related_person_contact_id')->nullable();

            $table->index(['id', 'user_list_related_person_id', 'priority', 'user_list_related_person_contact_id', 'is_active', 'type'], 'ix_user_list_related_person_type_is_active_type');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_related_person_type');
    }
};
