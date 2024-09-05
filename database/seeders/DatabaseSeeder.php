<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Classes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();

        $students =  [
            [
                'student_name' => 'Muhammad Ubaidullah',
                'student_class' => '1',
                'student_age' => '24',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Abdullah Mansoor',
                'student_class' => '1',
                'student_age' => '24',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Hanzala Imran',
                'student_class' => '2',
                'student_age' => '23',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Maham Khan',
                'student_class' => '1',
                'student_age' => '23',
                'student_gender' => 'f',
            ],
            [
                'student_name' => 'Muhmmad Zubair',
                'student_class' => '2',
                'student_age' => '24',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Mubeen Baloch',
                'student_class' => '5',
                'student_age' => '25',
                'student_gender' => 'm',
            ],
            [
                'student_name' => 'Arslan Khalid',
                'student_class' => '1',
                'student_age' => '22',
                'student_gender' => 'm',
            ],
          ];

          Student::insert($students);

          Classes::truncate();

        $classes =  [
            [ 'name' => 'BSCS'],
            [ 'name' => 'BSIT'],
            [ 'name' => 'BTECH'],
            [ 'name' => 'BCOM'],
            [ 'name' => 'MBA'],
            [ 'name' => 'BBA'],
          ];

          Classes::insert($classes);
    }
}
