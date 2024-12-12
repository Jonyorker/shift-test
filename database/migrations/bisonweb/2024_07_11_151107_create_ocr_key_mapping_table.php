<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('ocr_key_mapping', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key_id', 25);
            $table->string('key_desc', 50);
            $table->string('key_text', 50);
            $table->string('key_type', 25);

            $table->unique(['key_id', 'key_desc', 'key_text', 'key_type'], 'uk_ocr_key_mapping');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('ocr_key_mapping');
    }
};
