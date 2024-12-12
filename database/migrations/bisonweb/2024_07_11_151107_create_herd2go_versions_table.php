<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('herd2go_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('version', 20)->nullable();
            $table->bigInteger('build')->nullable();
            $table->dateTime('release_date')->nullable();
            $table->dateTime('expiry_date')->nullable();
            $table->longText('release_notes')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('herd2go_versions');
    }
};
