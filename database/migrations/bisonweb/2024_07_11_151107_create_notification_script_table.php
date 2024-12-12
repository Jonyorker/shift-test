<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('notification_script', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->string('description', 200)->nullable();
            $table->dateTime('created_date');
            $table->string('created_by', 10);
            $table->string('script_location');
            $table->tinyInteger('is_active');
            $table->string('mins', 200);
            $table->string('hours', 200);
            $table->string('dow', 200);
            $table->string('dom', 200);
            $table->string('month', 200);
            $table->tinyInteger('is_single');
            $table->string('code', 25);
            $table->tinyInteger('show');
            $table->string('type', 50)->nullable();

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('notification_script');
    }
};
