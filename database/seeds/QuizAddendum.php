<?php

use Illuminate\Database\Seeder;

class QuizAddendum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// course 2

		$question = new App\Question;
		
		$question->create(["question" => "<strong> 1. Which of the following is <em> inaccurate </em> as a role of research in a university setting? </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 2. The following are the strategic purposes of industrial R&D except for: </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 3. For industrially advanced countries, the main source(s) of funds for R&D activities are: </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 4. The basic elements needed for an R&D organization are: </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 5. Characteristic(s) that are more associated with research scientists and engineers (RSE) than with other professionals is: </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 6. The R&D mission is directly affected by the following factors <em> except </em>: </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 7. Different leadership styles can be used in order to manage research personnel effectively. The leadership style wherein subordinates give the information that the leader needs in order to make the decision and wherein the leader still makes the decision is </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 8. Merton’s social norms for pure research that states that information must be assessed independently of the source’s personal characteristics is </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 9. The /“Amadeus problem/” usually found in inventors and innovators refer to (a) </strong>", "course_id" => 2]);

		$question->create(["question" => "<strong> 10. The factors that directly shape and influence corporate strategy are </strong>", "course_id" => 2]);

		$answer = new App\Answer;		

		$answer->create(["answer" => "a. Research as one of the central missions of a modern university", "question_id" => 41, "correct" => false]);
		$answer->create(["answer" => "b. Research as the supporting generator of new knowledge", "question_id" => 41, "correct" => true]);
		$answer->create(["answer" => "c. Research as complementary to, as well as supportive of, teaching", "question_id" => 41, "correct" => false]);
		$answer->create(["answer" => "d. Research as a means of enhancing a university’s academic reputation and ranking", "question_id" => 41, "correct" => false]);		


		$answer->create(["answer" => "a. To defend, support, expand existing business", "question_id" => 42, "correct" => false]);
		$answer->create(["answer" => "b. To drive new business", "question_id" => 42, "correct" => false]);
		$answer->create(["answer" => "c. To broaden and deepen technological capability", "question_id" => 42, "correct" => false]);
		$answer->create(["answer" => "d. To explore potential business investors", "question_id" => 42, "correct" => true]);
		

		$answer->create(["answer" => "a. Business funding", "question_id" => 43, "correct" => false]);
		$answer->create(["answer" => "b. Government funding", "question_id" => 43, "correct" => false]);
		$answer->create(["answer" => "c. Both a and b", "question_id" => 43, "correct" => true]);
		$answer->create(["answer" => "d. None of the above", "question_id" => 43, "correct" => false]);
	

		$answer->create(["answer" => "a. People, idea, funds, cultural elements", "question_id" => 44, "correct" => true]);
		$answer->create(["answer" => "b. People, idea, cultural elements, laboratory", "question_id" => 44, "correct" => false]);
		$answer->create(["answer" => "c. People, idea, machinery, laboratory", "question_id" => 44, "correct" => false]);
		$answer->create(["answer" => "d. Idea, machinery, laboratory, cultural elements", "question_id" => 44, "correct" => false]);
		

		$answer->create(["answer" => "a. Orientation Toward Things, Not People", "question_id" => 45, "correct" => true]);
		$answer->create(["answer" => "b. Orientation Toward Employer, Not Profession", "question_id" => 45, "correct" => false]);
		$answer->create(["answer" => "c. Both a and b", "question_id" => 45, "correct" => false]);
		$answer->create(["answer" => "d. None of the above", "question_id" => 45, "correct" => false]);


		$answer->create(["answer" => "a. Technology environment", "question_id" => 46, "correct" => false]);
		$answer->create(["answer" => "b. Technical resources", "question_id" => 46, "correct" => false]);
		$answer->create(["answer" => "c. Competitive environment", "question_id" => 46, "correct" => true]);
		$answer->create(["answer" => "d. Technical resources", "question_id" => 46, "correct" => false]);
		

		$answer->create(["answer" => "a. Directive", "question_id" => 47, "correct" => false]);
		$answer->create(["answer" => "b. Negotiator", "question_id" => 47, "correct" => true]);
		$answer->create(["answer" => "c. Consultation", "question_id" => 47, "correct" => false]);
		$answer->create(["answer" => "d. Participative", "question_id" => 47, "correct" => false]);
		

		$answer->create(["answer" => "a. Universalism", "question_id" => 48, "correct" => true]);
		$answer->create(["answer" => "b. Communality", "question_id" => 48, "correct" => false]);
		$answer->create(["answer" => "c. Disinterestedness", "question_id" => 48, "correct" => false]);
		$answer->create(["answer" => "d. Organized Skepticism", "question_id" => 48, "correct" => false]);
		

		$answer->create(["answer" => "a. Selfish personality", "question_id" => 49, "correct" => false]);
		$answer->create(["answer" => "b. Pride and glory-seeking personalities", "question_id" => 49, "correct" => false]);
		$answer->create(["answer" => "c. Difficult and childish personalities", "question_id" => 49, "correct" => true]);
		$answer->create(["answer" => "d. Introverted personality", "question_id" => 49, "correct" => false]);
		

		$answer->create(["answer" => "a. R&D goals, competitive environment, market requirements, and distinctive competencies", "question_id" => 50, "correct" => false]);
		$answer->create(["answer" => "b. Corporate goals, technology environment, market requirements, and distinctive competencies", "question_id" => 50, "correct" => false]);
		$answer->create(["answer" => "c. Corporate goals, competitive environment, market requirements, and technical resources", "question_id" => 50, "correct" => false]);
		$answer->create(["answer" => "d. Corporate goals, competitive environment, market requirements, and distinctive competencies", "question_id" => 50, "correct" => true]);

		//course 2

		$question = new App\Tof;

		$question->create(["question" => "1. Pure basic research aims to produce a broad knowledge base that will generate a solution to current or future problems or possibilities.", "course_id" => 2]);
		$question->create(["question" => "2. Fundamental R&D does not have a development arm, instead it aims to reach into the unknown to support strategic decisions by the business to pursue certain directions.", "course_id" => 2]);
		$question->create(["question" => "3. R&D’s mission during the maturity stage of the industry cycle is to grow new business and to improve competitive position.", "course_id" => 2]);
		$question->create(["question" => "4. The best form of innovation and R&D activity approach towards a new and untapped market is incremental and in-house.", "course_id" => 2]);
		$question->create(["question" => "5. Successful R&D personnel are not overspecialized.", "course_id" => 2]);
		$question->create(["question" => "6. The fourth generation of R&D management treats the customer as an asset and veers away from product focus to a total concept focus.", "course_id" => 2]);
		$question->create(["question" => "7. The real option technique cannot properly capture the company’s flexibility to adapt and revise later decisions in response to unexpected competitive/technological/market developments.", "course_id" => 2]);
		$question->create(["question" => "8. The R&D strategy should be aligned with both the corporate strategy and the technology management strategy of the business.", "course_id" => 2]);
		$question->create(["question" => "9. The Resource Based Approach strategizes by searching for new technology applications from a set of competencies that are strategic for the firm instead of relying on the market structure and the positioning of the firm within an industry.", "course_id" => 2]);
		$question->create(["question" => "10. Doing R&D project management ensures that the right projects for the firm are being prioritized while R&D portfolio management ensures that R&D projects are being done correctly.", "course_id" => 2]);

		$answer = new App\TofAnswer;

		$answer->create(["answer" => "true", "tof_id" => 41, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 41, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 42, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 42, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 43, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 43, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 44, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 44, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 45, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 45, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 46, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 46, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 47, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 47, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 48, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 48, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 49, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 49, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 50, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 50, "correct" => true]);						

    }
}
