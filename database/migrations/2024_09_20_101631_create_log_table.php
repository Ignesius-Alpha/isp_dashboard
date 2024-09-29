<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('log')) {
            Schema::create('log', function (Blueprint $table) {
                $table->integer('pkiLogID', true);
                $table->integer('fkiUserID')->nullable()->index('fk_log_user');
                $table->enum('txtLogType', ['Audit', 'Activity']);
                $table->string('txtLogAction');
                $table->string('txtLogEntity')->nullable();
                $table->integer('numLogEntityID')->nullable();
                $table->text('txtLogOldValue')->nullable();
                $table->text('txtLogNewValue')->nullable();
                $table->dateTime('timestamp')->nullable()->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log');
    }
};
