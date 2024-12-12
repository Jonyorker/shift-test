<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('app_comments', function (Blueprint $table) {
            $table->string('app_name', 50)->nullable()->index('appname');
            $table->increments('cmt_id');
            $table->string('cmt_type', 50)->nullable();
            $table->string('cmt_user', 50)->nullable();
            $table->dateTime('cmt_date')->nullable();
            $table->text('cmt_text')->nullable();
            $table->dateTime('cmt_editlast')->nullable();
            $table->integer('cmt_editcount')->nullable();
            $table->string('app_status', 20)->nullable();
            $table->tinyInteger('cmt_concern')->nullable();
            $table->string('ref_name', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('app_comments');
    }
};
