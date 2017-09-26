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

		$valid_student->create(['student_number' => '1992-04235']);
		$valid_student->create(['student_number' => '2001-05190']);
		$valid_student->create(['student_number' => '2001-16788']);
		$valid_student->create(['student_number' => '2002-17959']);
		$valid_student->create(['student_number' => '2002-37577']);
		$valid_student->create(['student_number' => '2003-09643']);
		$valid_student->create(['student_number' => '2003-56746']);
		$valid_student->create(['student_number' => '2004-38120']);
		$valid_student->create(['student_number' => '2004-44451']);
		$valid_student->create(['student_number' => '2005-05005']);
		$valid_student->create(['student_number' => '2005-11415']);
		$valid_student->create(['student_number' => '2005-13275']);
		$valid_student->create(['student_number' => '2005-14247']);
		$valid_student->create(['student_number' => '2005-71842']);
		$valid_student->create(['student_number' => '2006-22207']);
		$valid_student->create(['student_number' => '2006-54390']);
		$valid_student->create(['student_number' => '2006-62722']);
		$valid_student->create(['student_number' => '2006-63342']);
		$valid_student->create(['student_number' => '2007-10232']);
		$valid_student->create(['student_number' => '2007-29374']);
		$valid_student->create(['student_number' => '2007-34051']);
		$valid_student->create(['student_number' => '2007-51270']);
		$valid_student->create(['student_number' => '2008-67764']);
		$valid_student->create(['student_number' => '2010-78595']);
		$valid_student->create(['student_number' => '2013-78869']);
		$valid_student->create(['student_number' => '2014-90418']);
		$valid_student->create(['student_number' => '2014-90421']);
		$valid_student->create(['student_number' => '2015-90059']);
		$valid_student->create(['student_number' => '2015-90061']);
		$valid_student->create(['student_number' => '2015-90073']);
		$valid_student->create(['student_number' => '2015-90074']);
		$valid_student->create(['student_number' => '2015-90091']);
		$valid_student->create(['student_number' => '2015-90092']);
		$valid_student->create(['student_number' => '2015-90096']);
		$valid_student->create(['student_number' => '2015-90201']);
		$valid_student->create(['student_number' => '2015-90203']);
		$valid_student->create(['student_number' => '2015-90218']);
		$valid_student->create(['student_number' => '2015-90219']);
		$valid_student->create(['student_number' => '2015-90220']);
		$valid_student->create(['student_number' => '2015-90222']);
		$valid_student->create(['student_number' => '2015-90225']);
		$valid_student->create(['student_number' => '2015-90226']);
		$valid_student->create(['student_number' => '2015-90227']);
		$valid_student->create(['student_number' => '2015-90305']);
		$valid_student->create(['student_number' => '2015-90628']);
		
		$valid_student->create(['student_number' => '2001-82007']);		
		$valid_student->create(['student_number' => '2014-90658']);


		//super users

		// $valid_student = new App\ValidStudent;

		$valid_student->create(['student_number' => '2005-08731', 'role' => 0]);
		$valid_student->create(['student_number' => '2015-90075', 'role' => 0]);
		$valid_student->create(['student_number' => '2015-90093', 'role' => 0]);
		$valid_student->create(['student_number' => '2015-90099', 'role' => 0]);
		$valid_student->create(['student_number' => '2014-90144', 'role' => 0]);



    }
}
