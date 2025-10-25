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
        // database/migrations/xxxx_create_invitations_table.php
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // e.g. "diana-and-fauzi-23-09-2025"
            $table->string('bride');
            $table->string('groom');
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
