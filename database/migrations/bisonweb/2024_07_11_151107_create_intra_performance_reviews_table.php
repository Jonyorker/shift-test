<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('intra_performance_reviews', function (Blueprint $table) {
            $table->increments('id')->index('_wa_sys_id_42e1eefe');
            $table->string('emp_id', 10)->index('_wa_sys_emp_id_42e1eefe');
            $table->string('review_type', 50)->nullable()->index('_wa_sys_review_type_42e1eefe');
            $table->integer('review_year')->index('_wa_sys_review_year_42e1eefe');
            $table->string('file_mime', 150)->nullable()->index('_wa_sys_file_mime_42e1eefe');
            $table->integer('file_size')->nullable()->index('_wa_sys_file_size_42e1eefe');
            $table->string('save_user', 10)->index('_wa_sys_save_user_42e1eefe');
            $table->dateTime('save_date')->index('idx_savedate');
            $table->string('save_notes')->nullable();
            $table->text('file_hash')->nullable();
            $table->string('file_ext', 10)->nullable()->index('_wa_sys_file_ext_251c81ed');
            $table->tinyInteger('is_skipped')->index('_wa_sys_is_skipped_251c81ed');

            $table->index(['emp_id'], 'idx_empid');
        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('intra_performance_reviews');
    }
};
