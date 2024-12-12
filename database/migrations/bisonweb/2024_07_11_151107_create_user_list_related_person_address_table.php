<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_related_person_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_list_related_person_id');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_primary');
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();

            $table->index(['user_list_related_person_id', 'address_line_1'], 'ix_userlistrelatedpersonid_address1');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_related_person_address');
    }
};
