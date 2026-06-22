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
        Schema::create('htg_clock_in', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('clock_in')->useCurrent(); 
            $table->timestamp('clock_out')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('htg_clock_in');
    }
};
