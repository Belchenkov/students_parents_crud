<?php

namespace Database\Seeders;

use App\Models\ParentOfStudent;
use App\Models\Student;
use App\Models\StudentParent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        ParentOfStudent::factory(5)->create();
        Student::factory(100)->create();
        StudentParent::factory(100)->create();
    }
}
