<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'profile' => Str::random(10)
        ];
    }
}
