<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('sl');
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('session_start')->nullable();
            $table->string('session_complete')->nullable();
            $table->string('institute')->nullable();
            $table->string('created')->nullable();
            $table->string('comments')->nullable();
            $table->integer('price')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
