<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bison_edvir_notifications_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bison_edvir_notifications_transaction_id');
            $table->dateTime('created_date');
            $table->string('defect')->nullable();
            $table->string('comment')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bison_edvir_notifications_comments');
    }
};
