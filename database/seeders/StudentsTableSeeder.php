<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentCount=(int)$this->command->ask('How many students you would like?',50);
        
        Student::factory($studentCount)->create();
    }
}
