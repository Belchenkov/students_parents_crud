<?php

namespace Database\Factories;

use App\Models\ParentOfStudent;
use App\Models\Student;
use App\Models\StudentParent;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentParentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentParent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => Student::inRandomOrder()->first()->id,
            'parent_id' => ParentOfStudent::inRandomOrder()->first()->id
        ];
    }
}
