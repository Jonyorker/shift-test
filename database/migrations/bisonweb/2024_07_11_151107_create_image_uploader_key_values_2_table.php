<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_key_values_2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key_code', 60)->nullable();
            $table->string('type', 10)->nullable();
            $table->string('string_value')->nullable();
            $table->dateTime('datetime_value')->nullable();
            $table->integer('type_id')->index('indx_image_id');
            $table->string('parent_type', 10);

            $table->index(['type_id', 'key_code', 'string_value', 'parent_type'], 'ix_key_values_2_keycode_stringvalue_parenttype');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_key_values_2');
    }
};
