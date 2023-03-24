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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->text('description');
            $table->timestamp('incident_reported_at');
            $table->boolean('status')->default('0');
            $table->boolean('war_room_opened')->default('0');
            $table->timestamp('war_room_opened_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
