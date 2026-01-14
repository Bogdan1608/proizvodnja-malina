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
    Schema::create('harvests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('plot_id')->constrained()->onDelete('cascade');
        $table->string('worker_name');
        $table->date('harvest_date');
        $table->time('harvest_time');
        $table->decimal('quantity', 8, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harvests');
    }
};
