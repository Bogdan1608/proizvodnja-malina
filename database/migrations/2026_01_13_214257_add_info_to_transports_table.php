<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('transports', function (Blueprint $blueprint) {
            // Dodajemo kolonu 'info' koja nedostaje
            $blueprint->string('info')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('transports', function (Blueprint $blueprint) {
            $blueprint->dropColumn('info');
        });
    }
};