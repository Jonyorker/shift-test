<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('settlement_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->string('truck_id', 100)->nullable();
            $table->dateTime('pay_to');
            $table->dateTime('create_date');
            $table->tinyInteger('is_primary');
            $table->string('filename', 120)->nullable();
            $table->tinyInteger('uploaded');
            $table->string('image_lookup_guid')->nullable();

            $table->unique(['emp_id', 'truck_id', 'pay_to', 'create_date'], 'unique_settlement');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('settlement_sheets');
    }
};
