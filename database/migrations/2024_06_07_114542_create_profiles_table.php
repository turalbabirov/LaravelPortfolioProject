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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthday_date')->nullable();
            $table->text('about_user')->nullable();
            $table->boolean('freelance')->default(false);
            $table->string('degree')->nullable();
            $table->text('experience')->nullable();
            $table->string('position')->nullable();
            //Arrays:
            $table->string('expertises')->nullable();
            $table->string('skills')->nullable();
            $table->string('experiences')->nullable();
            $table->string('projects')->nullable();
            $table->string('courses')->nullable();
            $table->string('socials')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
