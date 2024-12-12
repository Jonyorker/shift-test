<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_related_person', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_id');
            $table->integer('workday_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->tinyInteger('is_active');
            $table->string('relationship_id');
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
            $table->string('relationship_type')->nullable();

            $table->index(['user_list_id', 'workday_id', 'relationship_id'], 'ix_userlistrelatedperson_relationshipid_workdayid');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_related_person');
    }
};
