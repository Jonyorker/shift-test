<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::connection('psbison')->create('tblTrucks', function (Blueprint $table) {
            $table->increments('SN');
            $table->string('TruckID', 13)->nullable();
            $table->string('TruckName', 15)->nullable();
            $table->string('DispSysTruckID', 20)->nullable();
            $table->integer('DefaultDriver')->nullable();
            $table->integer('DefaultCabUnit')->nullable();
            $table->integer('CurrentDispatcher')->nullable();
            $table->integer('InBox')->nullable();
            $table->integer('OutBox')->nullable();
            $table->integer('Retired')->nullable();
            $table->boolean('KeepHistory');
            $table->string('MAPIProfile', 60)->nullable();
            $table->string('MAPIPassword', 20)->nullable();
            $table->string('InternetAlias', 50)->nullable();
            $table->integer('GroupFlag')->nullable();
            $table->integer('UseAdminMailBox');
            $table->string('SMTPReplyAddress', 60)->nullable();
            $table->text('EmailFolderID');
            $table->integer('AfterEmailSend');
            $table->string('SMTPLogin', 60)->nullable();
            $table->string('SMTPPassword', 30);
            $table->string('EMailFolderName', 50);
            $table->string('AlternateID', 50);
            $table->integer('GenericReeferUnitSN')->nullable();
            $table->dateTime('updated_on')->nullable();
            $table->integer('PositionsBox')->nullable();
            $table->integer('MaxDelayMins')->nullable();
            $table->dateTime('DelayedUntil')->nullable();
        });
    }

    public function down(): void
    {
        Schema::connection('psbison')->dropIfExists('tblTrucks');
    }
};
