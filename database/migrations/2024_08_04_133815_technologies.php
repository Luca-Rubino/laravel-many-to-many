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
        //
        Schema::create('technologies', function (Blueprint $technologies) {
            $technologies->id();
            $technologies->string('name');
            $technologies->string('lastname');
            $technologies->string('token', 64)->unique();
            $technologies->text('abilities')->nullable();
            $technologies->timestamp('last_used_at')->nullable();
            $technologies->timestamp('expires_at')->nullable();
            $technologies->timestamp('deleted_at')->nullable();
            $technologies->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('technologies');
    }
};
