<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cms_driving_labels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 100);
            $table->string('name', 100);
            $table->integer('sort');
            $table->dateTime('created_date');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cms_driving_labels');
    }
};
