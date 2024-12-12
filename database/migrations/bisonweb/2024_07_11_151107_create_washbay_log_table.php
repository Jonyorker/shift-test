<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('washbay_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('created_by', 10);
            $table->dateTime('created_date');
            $table->string('unit_number', 150)->nullable();
            $table->dateTime('required_date');
            $table->string('comments')->nullable();
            $table->string('modified_by', 10)->nullable();
            $table->dateTime('modified_date')->nullable();
            $table->string('follow_up_comments')->nullable();
            $table->string('unit_type', 10)->nullable();
            $table->string('vendor', 25)->nullable();
            $table->integer('combo_id')->nullable();
            $table->string('attendants')->nullable();
            $table->string('terminal', 20)->nullable();
            $table->string('shunt_code', 6)->nullable();
            $table->dateTime('delete_date')->nullable();
            $table->string('delete_by', 10)->nullable();
            $table->dateTime('completed_date')->nullable();
            $table->string('completed_by', 10)->nullable();
            $table->text('comment')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('washbay_log');
    }
};
