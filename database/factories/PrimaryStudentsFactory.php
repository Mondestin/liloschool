<?php

namespace Database\Factories;

use App\Models\PrimaryStudent;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PrimaryStudentsFactory extends Factory
{
       /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PrimaryStudent::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        // Generate a random gender (male or female)
        $gender = $this->faker->randomElement(['male', 'female']);
        $level = $this->faker->randomElement(['CP1', 'CP2']);
        $stClaCode = $this->faker->randomElement(['CP23', 'CP2A','CE23', 'CM2A']);
        
        return [
            "stNumber" => $this->faker->randomNumber(9),
            "avatar" => 'avatar.png',
            "stName" =>fake()->name(),
            "stSurname" =>fake()->name(),
            "stDob" =>fake()->date(),
            "stStatus" => true,
            "stGender" => $gender,
            "stAddress" =>fake()->address(),
            "stLevel" =>$level,
            "stClaCode" =>$stClaCode,
            "stPhone" =>fake()->phoneNumber(),
            "stEmail" =>fake()->unique()->safeEmail(),
            "stTown" => 'Pointe-Noire',
            "stArea" => 'Ngoyo',
            "stDateJoin" =>now()
        ];
    
    }
}
