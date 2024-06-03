<?php

namespace Database\Factories;

use App\Models\JobSeeker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobSeekerFactory extends Factory
{
    protected $model = JobSeeker::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'country' => $this->faker->country(),
            'postal_code' => $this->faker->postcode(),
            'photo' => null,
            'resume' => null,
            'cover_letter' => null,
            'bio' => $this->faker->paragraph(),
            'skills' => json_encode($this->faker->words(5)),
            'years_of_experience' => $this->faker->numberBetween(1, 20),
            'work_history' => json_encode([['company' => $this->faker->company(), 'position' => $this->faker->jobTitle(), 'years' => $this->faker->numberBetween(1, 5)]]),
            'linkedin_profile' => $this->faker->url(),
            'website' => $this->faker->url(),
            'available_for_hire' => $this->faker->boolean(),
            'user_id' => User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
