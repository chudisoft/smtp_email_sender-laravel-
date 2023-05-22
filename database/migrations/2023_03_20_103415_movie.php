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
        if (!Schema::hasTable('banned_ips')) {
            Schema::create('banned_ips', function (Blueprint $table) {
                $table->id()->key();
                $table->bigInteger('added_by');
                $table->string('ip',255);
                $table->integer('status');
                $table->timestamps();
            });
        }
        // if (!Schema::hasTable('')) {
        // }
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banned_ips');
    }
};
