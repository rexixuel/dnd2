<?php

use Illuminate\Database\Seeder;

class TestScript extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//regular 

		$valid_student = new App\ValidStudent;

	        // 2017 Dummy
		$valid_student->create(['student_number' => '2017-00001']);
		$valid_student->create(['student_number' => '2017-00002']);
		$valid_student->create(['student_number' => '2017-00003']);
		$valid_student->create(['student_number' => '2017-00004']);
		$valid_student->create(['student_number' => '2017-00005']);
		$valid_student->create(['student_number' => '2017-00006']);
		$valid_student->create(['student_number' => '2017-00007']);
		$valid_student->create(['student_number' => '2017-00008']);
		$valid_student->create(['student_number' => '2017-00009']);
		$valid_student->create(['student_number' => '2017-00010']);	    

    }
}
