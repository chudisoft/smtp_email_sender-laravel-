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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->key();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone',15)->nullable();
            $table->string('names', 100)->nullable();
            $table->string('address', 70)->nullable();
            $table->date('dob')->nullable();
            $table->int('gender')->nullable();
            $table->string('about', 3500)->nullable();
            $table->string('city', 70)->nullable();
            $table->string('state', 70)->nullable();
            $table->string('country', 70)->nullable();
            $table->string('whatsapp', 225)->nullable();
            $table->string('facebook', 225)->nullable();
            $table->string('telegram', 225)->nullable();
            $table->string('twitter', 225)->nullable();
            $table->string('ref', 25)->nullable();
            $table->string('role', 25);
            $table->integer('status');
            $table->integer('certification');
            $table->string('type', 10)->nullable();
            $table->string('filename',1500)->nullable();
            $table->string('path',1500)->nullable();
            // $table->string('reset_code', 255);
            // $table->timestamp('time_posted');
            // $table->timestamp('time_created')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
