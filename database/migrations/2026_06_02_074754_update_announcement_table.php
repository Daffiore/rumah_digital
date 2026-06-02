<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::rename('announcement', 'announcements');

        Schema::table('announcements', function (Blueprint $table) {
    $table->enum('status', ['Biasa', 'Penting', 'Kegiatan'])->change();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
