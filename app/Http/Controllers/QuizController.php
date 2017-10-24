<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Fcosrno\Exam\Exam;

use App\HtmlResultsGenerator;

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
        $course = new Course;
        $course = $course->find($courseId);
        
        $questions = $course->find($courseId)->questions;
        
        if (empty(count($questions))) {
            return abort(404);
        }

        foreach ($questions as $question) {
            $answerArray = [];
            $answers = $question->answers;
            $correct = "";
            foreach ($answers as $answer) {
                if ($answer['correct']) {
                    $correct = $answer->answer;
                }
                
                array_push($answerArray, $answer->answer);
            }
            

            $exam->ask($question->question)->setChoices($answerArray)->setAnswer($correct);
        }

        return $exam;
    }

    public function buildSummaryQuestions($courseId)
    {
        $questions = "";
        // HARDCODE ERRTHAAAAANG
        switch ($courseId) {
            case 1:
                $questions =
                "<ol>".
                "<li>".
                "What is organizational culture? How can one develop an effective organizational culture for an R&D lab?". // Question 1
                // Question 2
                "</li> <li>".
                "Differentiate basic research, applied research, and development.".
                "</li> <li>".
                // Question 3
                'Describe each elements of the cycle of technological change.'.
                "</li> <li>".
                // Question 4
                'Differentiate the different type of IP.'.
                "</li> <li>".
                // Question 5
                'What are the similarities and differences between innovation and entrepreneurship?'.
                "</li> </ol>";
                break;
            case 2:
                $questions =
                "<ol>".
                "<li>".
                "Discuss the steps in the general research process.". // Question 1
                // Question 2
                "</li> <li>".
                "Discuss and elaborate on any one of the five structural elements of an R and D organization.".
                "</li> <li>".
                // Question 3
                'Explain the distinctions among basic research, applied research, and experimental development in terms of objective and output.'.
                "</li> <li>".
                // Question 4
                'Explain the major differences among First-Generation, Second-Generation, and Third-Generation Research Management.'.
                "</li> <li>".
                // Question 5
                'Describe the three major forms of research misconduct.'.
                "</li> </ol>";
                break;
            case 4:
                $questions =
                "<ol>".
                "<li>".
                // Question 1
                "What are the marketing challenges in terms of technology, customers, marketing partners and the world?".
                // Question 2
                "</li> <li>".
                "What are the strategies to have a successful R&D marketing interaction?".
                "</li> <li>".
                // Question 3
                'In high tech companies, how does appropriate pricing strategy/consideration are determined?'.
                "</li> <li>".
                // Question 4
                'How can a high tech company be involved in a social entrepreneurship?'.
                "</li> <li>".
                // Question 5
                'Does patenting really benefit a company? When will the company starts to obtain the benefits?'.
                "</li> </ol>";
                break;
            case 5:
                $questions =
                "<ol>".
                "<li>".
                // Question 1
                "Differentiate a Vertical Technology Transfer and a Horizontal Technology Transfer. Give at least two examples for each technology transfer.".
                // Question 2
                "</li> <li>".
                "Differentiate a Global Value Chain and a Global Production Network.".
                "</li> <li>".
                // Question 3
                'Differentiate the “old industrial policy” and “new industrial policy”.'.
                "</li> <li>".
                // Question 4
                'What is the recommendation of UNIDO in forming a negotiating team? Why?'.
                "</li> <li>".
                // Question 5
                'Differentiate Internal Technology Acquisition and External Technology Acquisition. Give at least two examples for each technology acquisition.'.
                "</li> </ol>";
                break;
            case 6:
                $questions =
                "<ol>".
                "<li>".
                // Question 1
                "Briefly discuss the three key activities in the strategic management process. Why is it important for managers to recognize the interdependent nature of these activities?".
                // Question 2
                "</li> <li>".
                "What are some of the major trends that now require firms to have a greater strategic management perspective and empowerment in the strategic management process throughout the firm?".
                "</li> <li>".
                // Question 3
                'Why must managers be aware of a firm’s external environment?'.
                "</li> <li>".
                // Question 4
                'Briefly describe the primary and support activities in a firm’s value chain.'.
                "</li> <li>".
                // Question 5
                'How can managers create value by establishing important relationships among the value-chain activities both within their firm and between the firm and its customers and suppliers?'.
                "</li> </ol>";
                break;
            default:
                # code...
                break;
        }

        return $questions;
    }

    public function buildApplicationQuestions($courseId)
    {
        $questions = "";
        // HARDCODE ERRTHAAAAANG
        switch ($courseId) {
            case 1:
                $questions =
                "<ol>".
                "<li>".
                 // Question 1
                "Differentiate methods of technology foresight. Which of the methods can benefit a startup company in a specific industry? Explain how.".
                // Question 2
                "</li> <li>".
                "Cite at least two examples of each technology transfers (horizontal and vertical) that benefitted the country and the economy as a whole. ".
                "</li> <li>".
                // Question 3
                'Please breakdown the formula: innovation is equal to invention plus commercialization. Reflect on your current company or field of specialization if this formula is applicable. If yes, please explain why and provide concrete examples.'.
                "</li> </ol>";
                break;
            case 2:
                $questions =
                "<ol>".
                "<li>".
                // Question 1
                "Explain the rationale behind (1) the US model for having government research institutes (GRIs) managed by universities, (2) the French model for locating GRIs inside university campuses, or (3) other models for granting GRIs independent corporate status. ".
                // Question 2
                "</li> <li>".
                "How can science and technology in the country be better supported by additional support programs? How should these be designed and implemented to achieve such objective?".
                "</li> <li>".
                // Question 3
                'In your opinion, how can more jobs and businesses be created from the collaboration of science and technology with the industry?'.
                "</li> </ol>";
                break;
            case 4:
                $questions =
                "<ol>".
                "<li>".
                // Question 1
                "In your own point of view, how will you influence product champions in less innovative firms to be competitive and successful with that of the high tech companies? ".
                // Question 2
                "</li> <li>".
                "Have you experienced or rather your company experienced the chasm effect? What did you do to overcome the effects? ".
                "</li> <li>".
                // Question 3
                'Suppose you’re given a chance to re-brand your company, what will be your form of strategy? How will you address the pros and cons of rebranding?'.
                "</li> </ol>";
                break;
            case 5:
                $questions =
                "<ol>".
                "<li>".
                // Question 1
                "Assume that you are a private entity that is donating the new intelligent faculty center building to UP Diliman. Describe briefly and justify the steps you will take in choosing the technology to be used for erecting the building and for fitting it to be an intelligent building. Are they the same steps that UP, a government entity, will take? Why or why not?".
                // Question 2
                "</li> <li>".
                "Choose one Model of Technological Catch-up and Learning that can serve as a pattern for the Philippines. Support your choice with TM 241 literature and other TM literature. List down the Strengths, Weaknesses, Opportunities and Threats of the Philippines that can serve as a guide for adopting your chosen model.".
                "</li> <li>".
                // Question 3
                'In the present state of the Philippines, describe its industrial policy (old or new). If it is old discuss two examples to show that it is still old. If it is new discuss two examples to show that it is new. Then recommend a characteristic/s of what the industrial policy of the Philippines should be.'.
                "</li> </ol>";
                break;
            case 6:
                $questions =
                "<ol>".
                "<li>".
                // Question 1
                "Look up the vision statements and/or mission statements for a few companies. Do you feel that they are constructive and useful as a means of motivating employees and providing a strong strategic direction? Why? Why not? (Note: Annual reports, along with the Internet, may be good sources of information.)".
                // Question 2
                "</li> <li>".
                "Using published reports, select two CEOs who have recently made public statements regarding a major change in their firm’s strategy. Discuss how the successful implementation of such strategies requires changes in the firm’s primary and support activities.".
                "</li> <li>".
                // Question 3
                'Go to the Internet and look up one of these company sites: www.walmart.com, www.ge.com, and www.ford.com. What are some of the key events that would represent the "romantic" perspective of leadership? What are some of the key events that depict the "external control" perspective of leadership?'.
                "</li> </ol>";
                break;
            default:
                # code...
                break;
        }

        return $questions;
    }

    public function buildTofQuestions($courseId)
    {
        
        $exam = new exam();
        $course = new Course;
        $course = $course->find($courseId);

        $questions = $course->find($courseId)->tofquestions;
        

        foreach ($questions as $question) {
            $answers = $question->answers;
            $correct = "";

            foreach ($answers as $answer) {
                if ($answer['correct']) {
                    $correct = $answer->answer;
                }
            }
            

            $exam->ask($question->question)->truefalse($correct);
        }

        return $exam;
    }

    public function takeQuizDefault()
    {
        return $this->takeQuizType(1, 'multipleChoice');
    }

    public function takeQuizTypeDefault($courseId)
    {
        return $this->takeQuizType($courseId, 'multipleChoice');
    }

    public function takeQuizType($courseId, $quizType)
    {
        if ($quizType == "multipleChoice") {
            $exam = $this->buildQuestions($courseId);
            $type = "Multiple Choice";
            $quizForm = $exam->generateHtml();
        } elseif ($quizType == "tof") {
            $exam = $this->buildTofQuestions($courseId);
            $type = "True or False";
            $quizForm = $exam->generateHtml();
        } elseif ($quizType == "summary") {
            $quizForm = $this->buildSummaryQuestions($courseId);
            $type = "Summary Review";
        } elseif ($quizType == "application") {
            $quizForm = $this->buildApplicationQuestions($courseId);
            $type = "Application";
        }



        $course = new Course();
        $courses = $course::all();

        $course = $course::find($courseId);


        return view('quiz', compact('quizForm', 'courses', 'course', 'courseId', 'type', 'quizType'));
    }

    public function gradeQuiz(Request $request, $courseId, $quizType)
    {
        if ($quizType == "multipleChoice") {
            $exam = $this->buildQuestions($courseId);
            $type = "Multiple Choice";
        } elseif ($quizType == "tof") {
            $exam = $this->buildTofQuestions($courseId);
            $type = "True or False";
        } elseif ($quizType == "summary") {
            $exam = $this->buildSummaryQuestions($courseId);
            $type = "Summary Review";
        } elseif ($quizType == "application") {
            $exam = $this->buildApplicationQuestions($courseId);
            $type = "Application";
        }

        try {
            $requestFields = $request->all();
            $requestSpliced = array_splice($requestFields, 1);
            $myAnswers = array_values($requestSpliced);
            $percent = $exam->grade($myAnswers); // returns percent

            $questions = $exam->getQuestionsArray();

            $quizForm = new HtmlResultsGenerator($questions, $myAnswers);
            
            return back()->with('message', '<div class="alert alert-success"> You got a grade of '.$percent."</div> ".$quizForm);
        } catch (Exception $e) {
            echo $e;
        }
    }
}
