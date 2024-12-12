<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('holiday_request_new', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id', 10)->nullable();
            $table->dateTime('created_date');
            $table->string('status', 10)->nullable();
            $table->string('reply_by', 20)->nullable();
            $table->dateTime('reply_date')->nullable();
            $table->dateTime('date_from')->nullable();
            $table->dateTime('date_to')->nullable();
            $table->string('holiday_id', 10)->nullable();
            $table->float('request_time', 53, 0)->nullable();
            $table->string('request_unit', 10)->nullable();
            $table->float('approved_time', 53, 0)->nullable();
            $table->string('approved_unit', 10)->nullable();
            $table->integer('request_groupid')->nullable()->index('ix_requestgroupid');
            $table->integer('ody_sys_id')->nullable();
            $table->text('comment')->nullable();
            $table->text('reply_comment')->nullable();
            $table->text('cancel_comment')->nullable();
            $table->float('request_vacpay', 53, 0)->nullable();
            $table->float('approved_vacpay', 53, 0)->nullable();
            $table->tinyInteger('is_test');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('holiday_request_new');
    }
};
