<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('email_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->string('email_address')->nullable();
            $table->integer('mails_sent')->nullable();
            $table->integer('mails_received')->nullable();
            $table->string('emp_id', 20)->nullable();
            $table->dateTime('created_date');
            $table->integer('mails_read')->nullable();

            $table->unique(['date', 'email_address'], 'sqlserver_emailstats_date_emailaddress_index');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('email_stats');
    }
};
