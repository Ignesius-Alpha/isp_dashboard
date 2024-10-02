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
        if (!Schema::hasTable('isps')) {
            Schema::create('isps', function (Blueprint $table) {
                $table->integer('pkiIspID', true);
                $table->string('txtIspName');
                $table->integer('fkiSuperUserID')->nullable()->index('fk_isps_superuser');
                $table->string('txtIspSplynxID')->nullable();  // Add Splynx ID column
                $table->string('txtIspCrmID')->nullable();     // Add CRM ID column
                $table->dateTime('dteIspCreatedAt')->nullable()->useCurrent();
                $table->dateTime('dteIspUpdatedAt')->nullable()->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isps');
    }
};
