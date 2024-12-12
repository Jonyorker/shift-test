<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_department', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable()->unique('ix_sqlserver_bisonweb_userlistdepartment_code');
            $table->string('name')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_department');
    }
};
