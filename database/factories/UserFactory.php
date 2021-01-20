<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'birthday' => 1605691738,
            'phoneNumber' =>$this->faker->unique()->phoneNumber,
            'job' =>$this->faker->jobTitle,
            'avatar'=>$this->faker->unique()->url,
            'facebook' =>$this->faker->unique()->url,
            'gender' =>'nam',
            'country' =>$this->faker->unique()->address,
            'role' =>'user_Course',
            'status' =>4,
//            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'remember_token' => Str::random(10),
        ];
    }
}
