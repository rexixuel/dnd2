<?php

use Illuminate\Database\Seeder;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$course = new App\Course;

		$course->create(['title' => 'TM 201']);
		$course->create(['title' => 'TM 204']);
		$course->create(['title' => 'TM 205']);
		$course->create(['title' => 'TM 206']);
		$course->create(['title' => 'TM 241']);
		$course->create(['title' => 'TM 281']);

    }
}
