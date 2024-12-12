<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('bisonltl_shipments', function (Blueprint $table) {
            $table->integer('ord');
            $table->string('trl', 13)->nullable();
            $table->integer('lastevt')->nullable();
            $table->integer('nextevt')->nullable();
            $table->text('note')->nullable();
            $table->string('currentstatus', 6)->nullable();
            $table->string('currentcmp', 8)->nullable();
            $table->string('currentcity', 50)->nullable();
            $table->dateTime('currentdt')->nullable();
            $table->string('planstatus', 6)->nullable();
            $table->string('plancmp', 8)->nullable();
            $table->string('plancity', 50)->nullable();
            $table->dateTime('plandt')->nullable();
            $table->string('ordstatus', 60)->nullable();
            $table->string('currentprov', 2)->nullable();
            $table->string('planprov', 2)->nullable();
            $table->string('reftype', 10)->nullable();
            $table->string('refnumber', 50)->nullable();
            $table->string('latestatus', 10)->nullable();
            $table->decimal('cwt', 19, 4)->nullable();
            $table->string('flag', 50)->nullable();
            $table->integer('planevt')->nullable();
            $table->string('nextstatus', 6)->nullable();
            $table->string('nextcmp', 8)->nullable();
            $table->string('nextcity', 50)->nullable();
            $table->dateTime('nextdt')->nullable();
            $table->string('currevtcode', 2)->nullable();
            $table->string('nextevtcode', 2)->nullable();
            $table->string('planevtcode', 2)->nullable();
            $table->string('nextprov', 2)->nullable();
            $table->string('currtrl', 13)->nullable();
            $table->string('nexttrl', 13)->nullable();
            $table->string('currcar', 8)->nullable();
            $table->string('nextcar', 8)->nullable();
            $table->string('issues', 50)->nullable();
            $table->integer('accessorials')->nullable();
            $table->string('acclist', 200)->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('bisonltl_shipments');
    }
};
