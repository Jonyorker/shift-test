<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('pay_information_exclude_batches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch_number', 100)->unique('uniq_batchnumber');
            $table->dateTime('created_date');
            $table->string('created_by', 20);

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('pay_information_exclude_batches');
    }
};
