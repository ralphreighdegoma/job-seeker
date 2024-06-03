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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('photo')->nullable(); // Path to photo file
            $table->text('resume')->nullable(); // Path to resume file
            $table->text('cover_letter')->nullable(); // Path to cover letter file
            $table->text('bio')->nullable(); // Short biography
            $table->json('skills')->nullable(); // JSON encoded skills array
            $table->integer('years_of_experience')->nullable();
            $table->json('work_history')->nullable(); // JSON encoded work history
            $table->string('linkedin_profile')->nullable();
            $table->string('website')->nullable();
            $table->boolean('available_for_hire')->default(true);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};
