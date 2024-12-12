<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('cms_driving_internal_applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id', 10);
            $table->integer('cms_driving_postings_id');
            $table->dateTime('application_date');
            $table->string('ip_address');
            $table->tinyInteger('notice_sent');
            $table->integer('activity_id');
            $table->tinyInteger('is_awarded');

            $table->unique(['emp_id', 'cms_driving_postings_id'], 'employee_per_posting');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('cms_driving_internal_applicants');
    }
};
