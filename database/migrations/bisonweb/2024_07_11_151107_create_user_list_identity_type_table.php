<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('user_list_identity_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('code')->unique('uq__user_lis__40bbea3ad07bfbaf');
            $table->tinyInteger('is_active');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('user_list_identity_type');
    }
};
