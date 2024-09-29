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
            Schema::table('isps', function (Blueprint $table) {
                $table->foreign(['fkiSuperUserID'], 'fk_isps_superuser')->references(['pkiUserID'])->on('users')->onUpdate('restrict')->onDelete('set null');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('isps', function (Blueprint $table) {
            $table->dropForeign('fk_isps_superuser');
        });
    }
};
