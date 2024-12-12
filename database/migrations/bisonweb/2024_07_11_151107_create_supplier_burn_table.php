<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('bisonweb')->create('supplier_burn', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_num', 24);
            $table->string('terminal', 12);
            $table->dateTime('used_date');
            $table->decimal('quantity', 15);

        });
    }

    public function down(): void
    {
        Schema::connection('bisonweb')->dropIfExists('supplier_burn');
    }
};
