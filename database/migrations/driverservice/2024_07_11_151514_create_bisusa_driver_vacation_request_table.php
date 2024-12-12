<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('driverservice')->create('bisusa_driver_vacation_request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_code', 50);
            $table->dateTime('date_paid')->nullable();
            $table->float('request_amount', 53, 0)->nullable();
            $table->string('requested_by')->nullable();
            $table->dateTime('created_date')->useCurrent();
            $table->dateTime('updated_date')->nullable();
            $table->text('comment')->nullable();
            $table->string('status')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->string('reply_by')->nullable();
            $table->dateTime('reply_date')->nullable();
            $table->text('reply_comment')->nullable();
            $table->string('fleet')->nullable();
            $table->float('approved_amount', 53, 0)->nullable();
            $table->tinyInteger('request_all')->default(0);
        });
    }

    public function down(): void
    {
        Schema::connection('driverservice')->dropIfExists('bisusa_driver_vacation_request');
    }
};
