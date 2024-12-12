<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_upload_driver_score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mov_number')->nullable();
            $table->integer('lgh_number')->nullable();
            $table->integer('stp_number')->nullable()->index('imageuploaddriverscore_stpnumber_index');
            $table->string('stp_event')->nullable();
            $table->string('stp_type')->nullable();
            $table->dateTime('lgh_startdate')->nullable();
            $table->dateTime('lgh_enddate')->nullable();
            $table->string('lgh_driver1')->nullable();
            $table->string('lgh_driver2')->nullable();
            $table->integer('image_upload_family_id')->nullable();
            $table->integer('image_upload_member_id')->nullable();
            $table->string('image_upload_emp_id')->nullable();
            $table->integer('image_upload_stp_number')->nullable();
            $table->integer('image_type_id')->nullable();
            $table->dateTime('created_date');
            $table->dateTime('updated_date')->nullable();
            $table->string('lgh_carrier')->nullable();
            $table->integer('ord_hdrnumber')->nullable();

            $table->unique(['stp_number'], 'imageuploaddriverscore_stpnumber_unique');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_upload_driver_score');
    }
};
