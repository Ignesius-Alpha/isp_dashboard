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
        if (!Schema::hasTable('sidebarcontent')) {
            Schema::create('sidebarcontent', function (Blueprint $table) {
                $table->integer('pkiSidebarContentID', true);
                $table->string('txtSidebarContentName');
                $table->json('txtSidebarContentPermissions')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidebarcontent');
    }
};
