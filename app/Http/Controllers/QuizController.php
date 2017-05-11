<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Fcosrno\Exam\Exam;

use App\Course;

class QuizController extends Controller
{

	 public function __construct()
	{
	  	$this->middleware('auth');
	}

	public function buildQuestions($courseId)
	{		
		$exam = new exam();
		// HARDCODE ERRTHAAAAANG
		if($courseId == 1)
		{			
			// Question 1
			$exam->ask("1. Which of the following is <em> inaccurate </em> as a role of research in a university setting?")
			     ->setChoices("Research as one of the central missions of a modern university","Research as the supporting generator of new knowledge","Research as complementary to, as well as supportive of, teaching", "Research as a means of enhancing a university’s academic reputation and ranking")
			     ->setAnswer("Research as the supporting generator of new knowledge");
			// Question 2
			$exam->ask('2. The following are the strategic purposes of industrial R&D except for:')->setChoices('To defend, support, expand existing business','To drive new business','To broaden and deepen technological capability','To explore potential business investors')->setAnswer('To explore potential business investors');
			// Question 3
			$exam->ask('3. For industrially advanced countries, the main source(s) of funds for R&D activities are:')->setChoices('Business funding','Government funding','Both a and b','None of the above')->setAnswer('Both a and b');
			// Question 4
			$exam->ask('4. The basic elements needed for an R&D organization are:')->setChoices('People, idea, funds, cultural elements','People, idea, cultural elements, laboratory','People, idea, machinery, laboratory', 'Idea, machinery, laboratory, cultural elements')->setAnswer('People, idea, funds, cultural elements');
			// Question 5
			$exam->ask('5. Characteristic(s) that are more associated with research scientists and engineers (RSE) than with other professionals is:')->setChoices('Orientation Toward Things, Not People','Orientation Toward Employer, Not Profession','Both a and b','None of the above')->setAnswer('Orientation Toward Things, Not People');
			// Question 6
			$exam->ask('6. The R&D mission is directly affected by the following factors <em> except </em>:')->setChoices('Technology environment','Technical resources','Competitive environment','Technical resources')->setAnswer('Competitive environment');


			// Question 7
			$exam->ask('7. Different leadership styles can be used in order to manage research personnel effectively. The leadership style wherein subordinates give the information that the leader needs in order to make the decision and wherein the leader still makes the decision is')->setChoices('Directive','Negotiator','Consultation', 'Participative')->setAnswer('Negotiator');
			// Question 8
			$exam->ask('8. Merton’s social norms for pure research that states that information must be assessed independently of the source’s personal characteristics is')->setChoices('Universalism','Communality','Disinterestedness','Organized skepticism')->setAnswer('Universalism');
		}
		else
		{
			$exam->ask('Is the sky white?')->setChoices('Always','Never','Sometimes')->setAnswer('Sometimes');
			$exam->ask('Select things you may see at nighttime')->setSelections('Stars','Sun','Moon')->setAnswer('Stars','Moon');
			$exam->ask('Is this a question?')->truefalse('true');
		}

		return $exam;
	}

	public function buildSummaryQuestions($courseId)
	{		
		$exam = new exam();
		// HARDCODE ERRTHAAAAANG
		if($courseId == 1)
		{			
			// Question 1
			$exam->ask("1. Discuss the steps in the general research process.");

			// Question 2
			$exam->ask("2. Discuss and elaborate on any one of the five structural elements of an R and D organization.");

			// Question 3
			$exam->ask('3. Explain the distinctions among basic research, applied research, and experimental development in terms of objective and output.');
			// Question 4
			$exam->ask('4. Explain the major differences among First-Generation, Second-Generation, and Third-Generation Research Management.');
			// Question 5
			$exam->ask('5. Describe the three major forms of research misconduct.');
		}
		else
		{
			$exam->ask('Is the sky white?')->setChoices('Always','Never','Sometimes')->setAnswer('Sometimes');
			$exam->ask('Select things you may see at nighttime')->setSelections('Stars','Sun','Moon')->setAnswer('Stars','Moon');
			$exam->ask('Is this a question?')->truefalse('true');
		}

		return $exam;
	}

	public function buildTofQuestions($courseId)
	{		
		$exam = new exam();
		// HARDCODE ERRTHAAAAANG
		if($courseId == 1)
		{			
			// Question 1
			$exam->ask("1. Pure basic research aims to produce a broad knowledge base that will generate a solution to current or future problems or possibilities.")->truefalse('false');
			// Question 2
			$exam->ask('2. Fundamental R&D does not have a development arm, instead it aims to reach into the unknown to support strategic decisions by the business to pursue certain directions.')->truefalse('true');
			// Question 3
			$exam->ask('3. R&D’s mission during the maturity stage of the industry cycle is to grow new business and to improve competitive position.')->truefalse('false');
			// Question 4
			$exam->ask('4. The best form of innovation and R&D activity approach towards a new and untapped market is incremental and in-house.')->truefalse('false');
			// Question 5
			$exam->ask('5. Successful R&D personnel are not overspecialized.')->truefalse('true');
			// Question 6
			$exam->ask('6. The fourth generation of R&D management treats the customer as an asset and veers away from product focus to a total concept focus.')->truefalse('true');
			// Question 7
			$exam->ask('7. The real option technique cannot properly capture the company’s flexibility to adapt and revise later decisions in response to unexpected competitive/technological/market developments.')->truefalse('false');
			// Question 8
			$exam->ask('8. The R&D strategy should be aligned with both the corporate strategy and the technology management strategy of the business.')->truefalse('true');

			// Question 9
			$exam->ask('9. The Resource Based Approach strategizes by searching for new technology applications from a set of competencies that are strategic for the firm instead of relying on the market structure and the positioning of the firm within an industry.')->truefalse('true');
			// Question 10
			$exam->ask('10. Doing R&D project management ensures that the right projects for the firm are being prioritized while R&D portfolio management ensures that R&D projects are being done correctly.')->truefalse('false');			
		}
		else
		{
			$exam->ask('Is the sky white?')->setChoices('Always','Never','Sometimes')->setAnswer('Sometimes');
			$exam->ask('Select things you may see at nighttime')->setSelections('Stars','Sun','Moon')->setAnswer('Stars','Moon');
			$exam->ask('Is this a question?')->truefalse('true');
		}

		return $exam;
	}	

	public function takeQuizDefault()
	{
		return $this->takeQuizType(1,'multipleChoice');
	}

	public function takeQuizTypeDefault($courseId)
	{
		return $this->takeQuizType($courseId,'multipleChoice');
	}	

	public function takeQuizType($courseId,$quizType)
	{
		if($quizType == "multipleChoice")
		{
			$exam = $this->buildQuestions($courseId);
		    $type = "Multiple Choice";			
		}
		elseif($quizType == "tof")
		{
			$exam = $this->buildTofQuestions($courseId);
		    $type = "True or False";			
		}
		elseif($quizType == "summary")
		{
			$exam = $this->buildSummaryQuestions($courseId);
		    $type = "Summary Review";			
		}
		elseif($quizType == "application")
		{
			$exam = $this->buildApplicationQuestions($courseId);
		    $type = "Application";
		}


		$quizForm = $exam->generateHtml();

	    $course = new Course();
	    $courses = $course::all();

	    $course = $course::find($courseId);


		return view('quiz',compact('quizForm','courses','course', 'courseId', 'type', 'quizType'));
	}

	public function gradeQuiz(Request $request, $courseId, $quizType)
	{
		if($quizType == "multipleChoice")
		{
			$exam = $this->buildQuestions($courseId);
		    $type = "Multiple Choice";			
		}
		elseif($quizType == "tof")
		{
			$exam = $this->buildTofQuestions($courseId);
		    $type = "True or False";			
		}
		elseif($quizType == "summary")
		{
			$exam = $this->buildSummaryQuestions($courseId);
		    $type = "Summary Review";			
		}
		elseif($quizType == "application")
		{
			$exam = $this->buildApplicationQuestions($courseId);
		    $type = "Application";
		}

		try {
			$requestFields = $request->all();
			$requestSpliced = array_splice($requestFields, 1);
			$myAnswers = array_values($requestSpliced);
			$percent = $exam->grade($myAnswers); // returns percent

			$quizForm = $exam->generateHtmlResults();			

			return back()->with('message', '<div class="alert alert-success"> You got a grade of '.$percent."</div> ".$quizForm);
		}catch (Exception $e) {
			echo $e;
		}

	}	
}
