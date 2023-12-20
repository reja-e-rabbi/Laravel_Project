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
        Schema::create('sitelog', function (Blueprint $table) {
            $table->id();
            $table->string('sl')->nullable();
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('link')->nullable();
            $table->integer('total_project')->nullable();
            $table->string('total_project_sammary')->nullable();
            $table->integer('happy_clint')->nullable();
            $table->string('happy_clint_sammary')->nullable();
            $table->string('comments')->nullable();
            $table->string('upload_link')->nullable();

            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();

            $table->text('socile')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitelog');
    }
};
