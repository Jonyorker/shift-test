<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('image_uploader_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id')->nullable();
            $table->string('name')->nullable();
            $table->string('uid')->nullable();
            $table->string('image_uploader_type_id', 5)->nullable();
            $table->longText('comments')->nullable();
            $table->string('move_number', 10)->nullable();
            $table->string('page_number', 3)->nullable();
            $table->dateTime('created_date')->nullable();
            $table->string('pages', 3)->nullable();
            $table->string('is_test', 10)->nullable();
            $table->string('rotation_degree', 3)->nullable();
            $table->string('stp_number', 15)->nullable();
            $table->string('no_alert', 10)->nullable();
            $table->string('source', 20)->nullable();
            $table->string('detection_result', 60)->nullable();
            $table->string('app_version', 20)->nullable();
            $table->string('cmp_id', 20)->nullable();
            $table->string('cmp_name')->nullable();
            $table->longText('keys')->nullable();
            $table->longText('post_data')->nullable();
            $table->string('post_md5', 32)->nullable()->index('nonclusteredindex-post_md5');
            $table->integer('post_count')->nullable();
            $table->string('status', 50)->nullable();
            $table->longText('pars_paps_numbers')->nullable();
            $table->string('agr_number', 50)->nullable();

            $table->index(['emp_id', 'move_number'], 'image_uploader_transactions_emp_id_move_number');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('image_uploader_transactions');
    }
};
