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
        if (!Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->integer('pkiRoleID', true);
                $table->string('txtRoleName');
                $table->text('txtRoleDescription')->nullable();
                $table->json('txtRolePermissions')->nullable();
                $table->integer('numLevel')->default(1); // Add numLevel column with a default value
                $table->dateTime('dteRoleCreatedAt')->nullable()->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
