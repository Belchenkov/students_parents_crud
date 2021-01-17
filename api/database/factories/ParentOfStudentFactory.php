<?php

namespace Database\Factories;

use App\Models\ParentOfStudent;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParentOfStudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParentOfStudent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fio' => $this->faker->name,
            'phone' => $this->faker->phoneNumber
        ];
    }
}
