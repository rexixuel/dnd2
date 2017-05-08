<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Fcosrno\Exam\Exam;

class QuizController extends Controller
{

	 public function __construct()
	{
	  	$this->middleware('auth');
	}

	public function buildQuestions()
	{		
		$exam = new exam();

		$exam->ask('Is the sky blue?')->setChoices('Always','Never','Sometimes')->setAnswer('Sometimes');
		$exam->ask('Select things you may see at nighttime')->setSelections('Stars','Sun','Moon')->setAnswer('Stars','Moon');
		$exam->ask('Is this a question?')->truefalse('true');

		return $exam;
	}

	public function takeQuiz()
	{
		$exam = $this->buildQuestions();

		$quizForm = $exam->generateHtml();

		return view('quiz',compact('quizForm'));
	}

	public function gradeQuiz(Request $request)
	{
		$exam = $this->buildQuestions();

		try {
			$requestFields = $request->all();
			$requestSpliced = array_splice($requestFields, 1);
			$myAnswers = array_values($requestSpliced);
			$percent = $exam->grade($myAnswers); // returns percent

			return back()->with('message', 'You got a grade of '.$percent);
		}catch (Exception $e) {
			echo $e;
		}

	}	
}
