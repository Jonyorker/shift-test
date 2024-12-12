<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cms_driving_postings_label', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cms_driving_postings_id');
            $table->integer('cms_driving_labels_id');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cms_driving_postings_label');
    }
};
