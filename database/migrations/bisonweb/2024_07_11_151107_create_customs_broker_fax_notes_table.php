<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('customs_broker_fax_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customs_broker_package_id');
            $table->longtext('note');
            $table->string('created_by');
            $table->dateTime('created_date');

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('customs_broker_fax_notes');
    }
};
