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
		// $valid_student->create(['student_number' => '2015-90219']);
		$valid_student->create(['student_number' => '2014-90658']);


		//super users

		$valid_student = new App\ValidStudent;

		$valid_student->create(['student_number' => '2005-08731', 'role' => 0]);
		$valid_student->create(['student_number' => '2015-90075', 'role' => 0]);
		$valid_student->create(['student_number' => '2015-90093', 'role' => 0]);
		$valid_student->create(['student_number' => '2015-90099', 'role' => 0]);
		$valid_student->create(['student_number' => '2014-90144', 'role' => 0]);

		$course = new App\Course;

		$course->create(['title' => 'TM 201']);
		$course->create(['title' => 'TM 204']);
		$course->create(['title' => 'TM 205']);
		$course->create(['title' => 'TM 206']);
		$course->create(['title' => 'TM 241']);
		$course->create(['title' => 'TM 281']);



		//course 1

		$question = new App\Question;

		$question->create(["question" => "<strong>1. Which R&D Generations characterize R&D as portfolio, moving away from individual projects view, and with linkages to both business and corporate strategies. Risk-reward and similar methods guide the overall investments?</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>2. Which R&D Generations characterize R&D as network, focusing on collaboration within a wider system - involving competitors, suppliers, distributors, etc.? The ability to control product development speed is imperative, separating R from D.</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>3. Which type of inter-organizational relations describe contractual business networks based on joint multi-party strategic control, with the partners collaborating over key strategic decisions and sharing responsibilities for performance outcomes?</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>4. The systematic use of the knowledge or understanding gained from research, directed toward the production of useful materials, devices, systems or methods - including design and development of prototypes and processes is called?</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>5. According to OECD, this type of research is carried out with the expectation that it will produce a broad base of knowledge likely to form the background to the solution of recognized or expected current or future problems or possibilities.</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>6. A syndrome defined as the tendency of a stable research group to believe it possesses a monopoly of knowledge in its field, thereby rejecting new ideas from the outside.</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>7. The support activities is one of the two major categories of business activities in the VCA which comprises of the following except?</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>8. A technology acquisition method by way of finding out about a competitor\’s technology developments that are not open to the public through the use of techniques ranging from competitive intelligence to industrial espionage is called?</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>9. An innovation system that encompasses elements and relationships, either located within or rooted inside the borders of a nation.</strong>", "course_id" => 1]);

		$question->create(["question" => "<strong>10. The following may be included or considered as trade secrets except?</strong>", "course_id" => 1]);

		$answer = new App\Answer;

		$answer->create(["answer" => "First Generation", "question_id" => 1, "correct" => false]);
		$answer->create(["answer" => "Third Generation", "question_id" => 1, "correct" => true]);
		$answer->create(["answer" => "Second Generation", "question_id" => 1, "correct" => false]);
		$answer->create(["answer" => "Fifth Generation", "question_id" => 1, "correct" => false]);
		$answer->create(["answer" => "Fourth Generation", "question_id" => 1, "correct" => false]);

		$answer->create(["answer" => "a. First Generation", "question_id" => 2, "correct" => false]);
		$answer->create(["answer" => "b. Third Generation", "question_id" => 2, "correct" => false]);
		$answer->create(["answer" => "c. Second Generation", "question_id" => 2, "correct" => false]);
		$answer->create(["answer" => "d. Fifth Generation", "question_id" => 2, "correct" => true]);
		$answer->create(["answer" => "e. Fourth Generation", "question_id" => 2, "correct" => false]);

		$answer->create(["answer" => "a. R&D Consortia", "question_id" => 3, "correct" => false]);
		$answer->create(["answer" => "b. Subcontractor Networks", "question_id" => 3, "correct" => false]);
		$answer->create(["answer" => "c. Strategic Cooperative Agreements", "question_id" => 3, "correct" => true]);
		$answer->create(["answer" => "d. Market Relations", "question_id" => 3, "correct" => false]);
		$answer->create(["answer" => "e. Joint Ventures", "question_id" => 3, "correct" => false]);

		$answer->create(["answer" => "a. Technology", "question_id" => 4, "correct" => false]);
		$answer->create(["answer" => "b. Basic Research", "question_id" => 4, "correct" => false]);
		$answer->create(["answer" => "c. Development", "question_id" => 4, "correct" => true]);
		$answer->create(["answer" => "d. Applied Research", "question_id" => 4, "correct" => false]);
		$answer->create(["answer" => "e. Engineering", "question_id" => 4, "correct" => false]);

		$answer->create(["answer" => "a. Basic Research", "question_id" => 5, "correct" => false]);
		$answer->create(["answer" => "b. Pure Basic Research", "question_id" => 5, "correct" => false]);
		$answer->create(["answer" => "c. Oriented Basic Research", "question_id" => 5, "correct" => true]);
		$answer->create(["answer" => "d. Applied Research", "question_id" => 5, "correct" => false]);
		$answer->create(["answer" => "e. Experiment Development", "question_id" => 5, "correct" => false]);

		$answer->create(["answer" => "a. The Slingshot Syndrome", "question_id" => 6, "correct" => false]);
		$answer->create(["answer" => "b. The Not-Invented-Here Syndrome", "question_id" => 6, "correct" => true]);
		$answer->create(["answer" => "c. The Creative Tensions", "question_id" => 6, "correct" => false]);
		$answer->create(["answer" => "d. The Innovation Behavior", "question_id" => 6, "correct" => false]);
		$answer->create(["answer" => "e. The Open Environment", "question_id" => 6, "correct" => false]);

		$answer->create(["answer" => "a. Procurement", "question_id" => 7, "correct" => false]);
		$answer->create(["answer" => "b. Technology Development", "question_id" => 7, "correct" => false]);
		$answer->create(["answer" => "c. Operations", "question_id" => 7, "correct" => true]);
		$answer->create(["answer" => "d. Human Resource Management", "question_id" => 7, "correct" => false]);
		$answer->create(["answer" => "e. Firm Infrastructure", "question_id" => 7, "correct" => false]);

		$answer->create(["answer" => "a. Reverse Engineering", "question_id" => 8, "correct" => false]);
		$answer->create(["answer" => "b. Covert Acquisition without Internal R&D", "question_id" => 8, "correct" => false]);
		$answer->create(["answer" => "c. Technology Foraging and Prospecting", "question_id" => 8, "correct" => false]);
		$answer->create(["answer" => "d. Seizing Tacit Knowledge", "question_id" => 8, "correct" => false]);
		$answer->create(["answer" => "e. Covert Acquisition with Internal R&D", "question_id" => 8, "correct" => true]);

		$answer->create(["answer" => "a. System", "question_id" => 9, "correct" => false]);
		$answer->create(["answer" => "b. Dynamic System", "question_id" => 9, "correct" => false]);
		$answer->create(["answer" => "c. Social System", "question_id" => 9, "correct" => false]);
		$answer->create(["answer" => "d. National Innovation System", "question_id" => 9, "correct" => true]);
		$answer->create(["answer" => "e. Innovation System", "question_id" => 9, "correct" => false]);

		$answer->create(["answer" => "a. Computer Course Code", "question_id" => 10, "correct" => false]);
		$answer->create(["answer" => "b. Designs and Drawings", "question_id" => 10, "correct" => false]);
		$answer->create(["answer" => "c. Business Information (i.e. vendor lists, customer lists, marketing plans, supply sources, etc.)", "question_id" => 10, "correct" => false]);
		$answer->create(["answer" => "d. Skills developed during the course of deployment", "question_id" => 10, "correct" => true]);
		$answer->create(["answer" => "e. Technical know-how", "question_id" => 10, "correct" => false]);

		//course 4

		$question = new App\Question;

		$question->create(["question" => "<strong>1. A company's total marketing communications package consists of a special blend of advertising, sales promotion, public relations, personal selling, and direct-marketing tools that the company uses to communicate customer value and build customer relationships.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>2. Which of the following elements of the marketing communications mix refers to any paid form of non-personal presentation and promotion of ideas, goods, or services by an identified sponsor via print, broadcast, network, electronic, and display media?</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>3. Advertising, sales promotion, personal selling, public relations, and direct marketing are all ________.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>4. Which of the following benefits is offered by sales promotion tools?</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>5. What is the element of the marketing communications mix that involves people-to-people oral, written, or electronic communications that relate to the merits or experiences of purchasing or using products or services.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>6. Target profit pricing uses the concept of a ________, which shows the total cost and total revenue expected at different sales volume levels.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>7. Lancaster Box Company wants to provide better customer service while trimming distribution costs through teamwork, both inside the company and among all the marketing channel organizations. Lancaster Box is thinking of ________.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>8. Which of the following marketing communications tools has the highest cost-effectiveness in the introduction stage of the product life cycle?</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>9. Which of the following marketing communications tools is most effective at the later stages of the buying process?</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>10. During which stage of new-product development will management most likely estimate minimum and maximum sales to assess the range of risk in launching a new product?</strong>", "course_id" => 4]);

		$answer = new App\Answer;

		$answer->create(["answer" => "a. The communications method", "question_id" => 11, "correct" => false]);
		$answer->create(["answer" => "b. Integrated marketing", "question_id" => 11, "correct" => false]);
		$answer->create(["answer" => "c. Promotion mix ", "question_id" => 11, "correct" => true]);
		$answer->create(["answer" => "d. Competitive marketing", "question_id" => 11, "correct" => false]);
		$answer->create(["answer" => "e. Target marketing", "question_id" => 11, "correct" => false]);

		$answer->create(["answer" => "a. advertising", "question_id" => 12, "correct" => false]);
		$answer->create(["answer" => "b. personal selling", "question_id" => 12, "correct" => false]);
		$answer->create(["answer" => "c. sales promotion", "question_id" => 12, "correct" => false]);
		$answer->create(["answer" => "d. direct marketing", "question_id" => 12, "correct" => false]);
		$answer->create(["answer" => "e. public relations", "question_id" => 12, "correct" => true]);

		$answer->create(["answer" => "a. communications channels focused more on narrowcasting than broadcasting", "question_id" => 13, "correct" => false]);
		$answer->create(["answer" => "b. promotional tools used for push strategies but not pull strategies", "question_id" => 13, "correct" => false]);
		$answer->create(["answer" => "c. promotional tools used for pull strategies but not push strategies", "question_id" => 13, "correct" => false]);
		$answer->create(["answer" => "d. communications channels that should be integrated under the concept of integrated marketing communications", "question_id" => 13, "correct" => true]);
		$answer->create(["answer" => "e. promotional tools adapted for use in mass marketing", "question_id" => 13, "correct" => false]);

		$answer->create(["answer" => "a. Sales promotion tools can reach prospects who prefer to avoid mass media and targeted promotions.", "question_id" => 14, "correct" => false]);
		$answer->create(["answer" => "b. Sales promotion tools are more authentic and credible to buyers than others such as advertising, public relations, and personal selling.", "question_id" => 14, "correct" => true]);

		//watch out
		$answer->create(["answer" => "c. Sales promotion tools are typically an indirect form of 'soft-sell' and hence, better received by customers.", "question_id" => 14, "correct" => false]);
		$answer->create(["answer" => "d. Sales promotion tools incorporate some concession, inducement, or contribution that gives value to the consumer.", "question_id" => 14, "correct" => false]);
		$answer->create(["answer" => "e. Sales promotion tools allow buyers personal choices and encourage them to respond directly", "question_id" => 14, "correct" => false]);

		$answer->create(["answer" => "a. Advertising", "question_id" => 15, "correct" => true]);
		$answer->create(["answer" => "b. Personal selling", "question_id" => 15, "correct" => false]);
		$answer->create(["answer" => "c. Sales promotion", "question_id" => 15, "correct" => false]);
		$answer->create(["answer" => "d. Word-of-mouth marketing", "question_id" => 15, "correct" => false]);
		$answer->create(["answer" => "e. Public relations", "question_id" => 15, "correct" => false]);

		$answer->create(["answer" => "a. value-based chart", "question_id" => 16, "correct" => false]);
		$answer->create(["answer" => "b. competition-based chart", "question_id" => 16, "correct" => false]);
		$answer->create(["answer" => "c. demand-curve", "question_id" => 16, "correct" => false]);
		$answer->create(["answer" => "d. unit cost", "question_id" => 16, "correct" => false]);
		$answer->create(["answer" => "e. break-even chart", "question_id" => 16, "correct" => true]);

		$answer->create(["answer" => "a. supply chain management", "question_id" => 17, "correct" => false]);
		$answer->create(["answer" => "b. customer relationship management", "question_id" => 17, "correct" => false]);
		$answer->create(["answer" => "c. integrated logistics management", "question_id" => 17, "correct" => true]);
		$answer->create(["answer" => "d. horizontal marketing system", "question_id" => 17, "correct" => false]);
		$answer->create(["answer" => "e. disintermediation", "question_id" => 17, "correct" => false]);

		$answer->create(["answer" => "a. personal selling", "question_id" => 18, "correct" => false]);
		$answer->create(["answer" => "b. interactive marketing", "question_id" => 18, "correct" => true]);
		$answer->create(["answer" => "c. sales promotion", "question_id" => 18, "correct" => false]);
		$answer->create(["answer" => "d. direct marketing", "question_id" => 18, "correct" => false]);
		$answer->create(["answer" => "e. events and experiences", "question_id" => 18, "correct" => false]);

		$answer->create(["answer" => "a. personal selling", "question_id" => 19, "correct" => false]);
		$answer->create(["answer" => "b. public relations", "question_id" => 19, "correct" => false]);
		$answer->create(["answer" => "c. advertising", "question_id" => 19, "correct" => false]);
		$answer->create(["answer" => "d. sales promotions", "question_id" => 19, "correct" => true]);
		$answer->create(["answer" => "e. direct marketing", "question_id" => 19, "correct" => false]);

		$answer->create(["answer" => "a. business analysis", "question_id" => 20, "correct" => true]);
		$answer->create(["answer" => "b. concept testing", "question_id" => 20, "correct" => false]);
		$answer->create(["answer" => "c. marketing strategy development", "question_id" => 20, "correct" => false]);
		$answer->create(["answer" => "d. product development", "question_id" => 20, "correct" => false]);
		$answer->create(["answer" => "e. test marketing", "question_id" => 20, "correct" => false]);


		//course 6

		$question = new App\Question;

		$question->create(["question" => "<strong>1. Which of the following lists is the hierarchy of organizational goals in order from least specific to most specific?</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>2. Although firm infrastructure is quite frequently viewed only as overhead expense, it can become</strong>", "course_id" => 6]);

		//watch out
		$question->create(["question" => "<strong>3. If a large segment of a firm's value is in intellectual and human assets, the difference between the company's market value and book value in the knowledge economy should ___________ a company with mostly physical and financial assets. </strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>4. Which of the following is false regarding how a differentiation strategy can help a firm to improve its competitive position vis à vis Porter's five forces?</strong>", "course_id" => 6]);


		$question->create(["question" => "<strong>5. A narrow market focus is to a differentiation-based strategy as a</strong>", "course_id" => 6]);


		$question->create(["question" => "<strong>6. As stated by Michael Porter: 'There's a tremendous allure to _______________. It's the big play, the dramatic gesture. With one stroke of the pen you can add billions to size, get a front page story, and create excitement in markets.'</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>7. Vertical integration may be beneficial when</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>8. As a rule, discussions of the relationship between strategy and structure strongly connote that</strong>", "course_id" => 6]);

		$question->create(["question" => "<strong>9. The 'top down' perspective of empowerment</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>10. Strategy implementation and formulation is a challenging, on-going process. To be effective, it should involve</strong>", "course_id" => 6]);

		$answer = new App\Answer;

		$answer->create(["answer" => "a. Mission statements, strategic objectives, vision statements.", "question_id" => 21, "correct" => false]);
		$answer->create(["answer" => "b. Mission statements, vision statements, strategic objectives.", "question_id" => 21, "correct" => false]);
		$answer->create(["answer" => "c. Vision statements, strategic objectives, mission statements", "question_id" => 21, "correct" => false]);
		$answer->create(["answer" => "d. Vision statements, mission statements, strategic objectives", "question_id" => 21, "correct" => true]);

		$answer->create(["answer" => "a. Negotiating and maintaining ongoing relations with regulatory bodies.", "question_id" => 22, "correct" => false]);
		//watch out
		$answer->create(["answer" => "b. Marketing expertise increasing a firm's revenues and enabling it to enter new markets.", "question_id" => 22, "correct" => true]);
		$answer->create(["answer" => "c. Effective information systems contributing significantly to a firm's overall cost leadership strategy.", "question_id" => 22, "correct" => false]);
		$answer->create(["answer" => "d. Top management providing a key role in collaborating with important customers.", "question_id" => 22, "correct" => false]);


		$answer->create(["answer" => "a. Be equal to", "question_id" => 23, "correct" => false]);
		$answer->create(["answer" => "b. Be smaller than", "question_id" => 23, "correct" => false]);
		$answer->create(["answer" => "c. not be correlated with", "question_id" => 23, "correct" => false]);
		$answer->create(["answer" => "d. be larger than", "question_id" => 23, "correct" => true]);

		$answer->create(["answer" => "a. By increasing a firm's margins, it avoids the need for a low cost position.", "question_id" => 24, "correct" => false]);
		$answer->create(["answer" => "b. It helps a firm to deal with supplier power and reduces buyer power since buyers lack comparable alternatives.", "question_id" => 24, "correct" => false]);
		$answer->create(["answer" => "c. Supplier power is increased because suppliers will be able to charge higher prices for their inputs.", "question_id" => 24, "correct" => true]);
		$answer->create(["answer" => "d. Firms will enjoy high customer loyalty, thus experiencing less threat from substitutes than its competitors.", "question_id" => 24, "correct" => false]);


		$answer->create(["answer" => "a. Growth market is to a differentiation-based strategy.", "question_id" => 25, "correct" => false]);
		$answer->create(["answer" => "b. Growth market is to a cost-based strategy.", "question_id" => 25, "correct" => false]);
		$answer->create(["answer" => "c. Technological innovation is to a cost-based strategy.", "question_id" => 15, "correct" => false]);
		$answer->create(["answer" => "d. Broadly-defined target market is to a cost leadership strategy.", "question_id" => 25, "correct" => true]);

		$answer->create(["answer" => "a. Mergers and acquisitions", "question_id" => 26, "correct" => true]);
		$answer->create(["answer" => "b. Strategic alliances and joint ventures", "question_id" => 26, "correct" => false]);
		$answer->create(["answer" => "c. Internal development", "question_id" => 26, "correct" => false]);
		$answer->create(["answer" => "d. Differentiation strategies", "question_id" => 26, "correct" => false]);

		$answer->create(["answer" => "a. Flexibility is reduced, providing a more stationary position in the competitive environment.", "question_id" => 27, "correct" => false]);
		$answer->create(["answer" => "b. The minimum efficient scales of two corporations are different.", "question_id" => 27, "correct" => false]);
		$answer->create(["answer" => "c. Lower transaction costs and improved coordination are vital and achievable through vertical integration.", "question_id" => 27, "correct" => true]);
		$answer->create(["answer" => "d. Various segregated specializations will be combined.", "question_id" => 27, "correct" => false]);

		$answer->create(["answer" => "a. Strategy follows structure.", "question_id" => 28, "correct" => false]);
		$answer->create(["answer" => "b. Strategy can effectively be formulated without considering structural elements.", "question_id" => 28, "correct" => false]);
		$answer->create(["answer" => "c. Structure typically has a very small influence on a firm's strategy.", "question_id" => 28, "correct" => false]);
		$answer->create(["answer" => "d. Structure follows strategy", "question_id" => 28, "correct" => true]);

		$answer->create(["answer" => "a. Delegates responsibility.", "question_id" => 29, "correct" => true]);
		$answer->create(["answer" => "b. Encourages intelligent risk-taking", "question_id" => 29, "correct" => false]);
		$answer->create(["answer" => "c. Trusts people to perform.", "question_id" => 29, "correct" => false]);
		$answer->create(["answer" => "d. Encourages cooperative behavior.", "question_id" => 29, "correct" => false]);

		$answer->create(["answer" => "a. The board of directors, CEO, and CFO.", "question_id" => 30, "correct" => false]);
		$answer->create(["answer" => "b. Line and staff managers.", "question_id" => 30, "correct" => false]);
		$answer->create(["answer" => "c. The CEO and the board of directors", "question_id" => 30, "correct" => false]);
		$answer->create(["answer" => "d. All of the above.", "question_id" => 30, "correct" => true]);


		//TOF

		//course 1 tof
		$question = new App\Tof;

		$question->create(["question" => "<strong>1. Abernathy-Clark model offers one explanation why new entrants may outperform incumbents in the face of some radical innovations. The model suggests that there are actually two kinds of knowledge that underpin an innovation: technology and market.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>2. A dominant design is a design that becomes an industrial standard for a specific product. As soon as it emerges, industry gets security and is able to invest heavily and on a long-term basis.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>3. According to OECD oriented basic research is carried out for the advancement of knowledge, without working for long-term economic or social benefits and with no positive efforts being made to apply the results to practical problems or to transfer the results to sectors responsible for its applications.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>4. Technology foresight tends to assume that there is one probable future, whereas technology forecast assumes that there are numerous possible futures, and that the future is in fact there to be created through the actions we choose to take today.  </strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>5. A latecomer is classification of market entrant which does not enter the market until the product begins to penetrate the market.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>6. The transfer of an embryonic technology from an individual or institutional inventor to an organization that can either commercialize it into a new product or process or make it publicly available for the practical solution of a problem in society is called vertical technology transfer.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>7. In licensing-in acquisition method, the urgency of acquisition is higher and the commitment involved in the acquisition is at lowest.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>8. A technology development model approach use by developing countries by adopting special applications of a technology or variants of a dominant design is refer as linear approach.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>9. A copyright protect ideas, but not the form in which they appear.</strong>", "course_id" => 1]);
		$question->create(["question" => "<strong>10.  The fourth stage of the linear model of technological innovation is the early stage technology development.</strong>", "course_id" => 1]);

		$answer = new App\TofAnswer;

		$answer->create(["answer" => "true", "tof_id" => 1, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 1, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 2, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 2, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 3, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 3, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 4, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 4, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 5, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 5, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 6, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 6, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 7, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 7, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 8, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 8, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 9, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 9, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 10, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 10, "correct" => false]);

		//course 4

		$question = new App\Tof;

		$question->create(["question" => "<strong>1. The bandwagon effect is a phenomenon whereby the rate of uptake of beliefs, ideas, fads and trends decreases the more that they have already been adopted by others. </strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>2. Brand equity research has taken place in consumer markets and the concept of it is also important for understanding competitive dynamics and price structures of business-to-business markets.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>3. Direct marketing focuses on the customer, data, and testing. Hence, besides the actual communication, a direct marketing campaign will not incorporate actionable segments and use pre- and post-campaign analytics to measure results. </strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>4. Distribution (or place) is one of the five elements of the marketing mix.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>5. The final product quality, either low or high is not dependent on the price elasticity of demand, but the specific needs that the product is aimed to satisfy.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>6. In marketing, product bundling is offering several products for sale as one combined product. It is a common feature in many perfectly competitive product markets. </strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>7. Bargaining power is the relative ability of parties in a situation to exert influence over each other. If both parties are on an equal footing in a debate, then they will have equal bargaining power, such as in a perfectly competitive market, or between an evenly matched monopoly and monopsony.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>8. The study of consumer behavior is concerned with pre-purchase activities of purchasing behavior. Also, research has shown that consumer behavior is difficult to predict. </strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>9. Developing a value proposition is based on a review and analysis of the benefits, costs, and value that an organization can deliver to its customers, prospective customers, and other constituent groups within and outside the organization. It is also a positioning of value, where Value = Benefits - Cost wherein cost include economic risks.</strong>", "course_id" => 4]);
		$question->create(["question" => "<strong>10. Willingness to pay is the maximum price at or below which a consumer will definitely buy one unit of the product. This corresponds to the standard economic view of consumer reservation price.</strong>", "course_id" => 4]);

		$answer = new App\TofAnswer;

		$answer->create(["answer" => "true", "tof_id" => 11, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 11, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 12, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 12, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 13, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 13, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 14, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 14, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 15, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 15, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 16, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 16, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 17, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 17, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 18, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 18, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 19, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 19, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 20, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 20, "correct" => false]);

		//course 6

		$question = new App\Tof;

		$question->create(["question" => "<strong>1. Efficiency at logistics and capacity utilization are key competitive factors in resource companies</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>2. Breadth of product line and proprietary technology are key competitive factors in components-oriented companies.</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>3. Project management and cost-effective technology are key competitive factors in systems -oriented companies. </strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>4. The performance of a firm can only be seen by the stakeholders.</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>5. Technology is not critical for the survival of modern business and acts only as an extension of human skills and not as multiplier. </strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>6. The industrial vs. consumer environment situation and international/domestic competition are considered as part of the internal environment of the firm.</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>7. Supervisors, team leaders and foremen are   considered middle levels of management</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>8. Founder/Chairman: Business Strategy and Division Managers: Guiding Philosophy.</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>9. There is low degree of uncertainty in operations management.</strong>", "course_id" => 6]);
		$question->create(["question" => "<strong>10. In systems-oriented companies the level integrator/applier systems technology is high to accommodate the high quantity of the final customer.</strong>", "course_id" => 6]);

		$answer = new App\TofAnswer;

		$answer->create(["answer" => "true", "tof_id" => 21, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 21, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 22, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 22, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 23, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 23, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 24, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 24, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 25, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 25, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 26, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 26, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 27, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 27, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 28, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 28, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 29, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 29, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 30, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 30, "correct" => true]);    	
		//course 5

		$question = new App\Question;

		$question->create(["question" => "<strong>1. Which of the following is NOT a channel of International Technology Transfer?</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>2. Which of the following is a disadvantage of International Franchising?</strong>", "course_id" => 5]);

		$question->create(["question" => "<strong>3. Which of the following is NOT a type of Functional Alliances?</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>4. Which of the following is a major form of International Contracting?</strong>", "course_id" => 5]);


		$question->create(["question" => "<strong>5. Which of the following is NOT a type of Subcontracting?</strong>", "course_id" => 5]);


		$question->create(["question" => "<strong>6. Which of the following is a disadvantage of International Joint Venture?</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>7. Which of the following is NOT a perspective of Technology Implementation?</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>8. Which of the following is NOT a definition of Change Management?</strong>", "course_id" => 5]);

		$question->create(["question" => "<strong>9. Which of the following is a type of industrial cluster in developing countries?</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>10. Which of the following is NOT a classification of Foreign Direct Investment?</strong>", "course_id" => 5]);

		$answer = new App\Answer;

		$answer->create(["answer" => "a. Marketing Channel", "question_id" => 31, "correct" => true]);
		$answer->create(["answer" => "b. Formal Channels", "question_id" => 31, "correct" => false]);
		$answer->create(["answer" => "c. Trade Channel", "question_id" => 31, "correct" => false]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 31, "correct" => false]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 31, "correct" => false]);

		$answer->create(["answer" => "a. Firms can quickly build a global presence", "question_id" => 32, "correct" => false]);		
		$answer->create(["answer" => "b. The geographic distance of the firm from its foreign franchisees can make quality control difficult", "question_id" => 32, "correct" => true]);
		$answer->create(["answer" => "c. Firms avoid many costs and risks of opening up a foreign market", "question_id" => 32, "correct" => false]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 32, "correct" => false]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 32, "correct" => false]);


		$answer->create(["answer" => "a. Production Alliances", "question_id" => 33, "correct" => false]);
		$answer->create(["answer" => "b. Marketing Alliances", "question_id" => 33, "correct" => false]);
		$answer->create(["answer" => "c. Human Resources Alliances", "question_id" => 33, "correct" => true]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 33, "correct" => false]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 33, "correct" => false]);

		$answer->create(["answer" => "a. Turnkey Project", "question_id" => 34, "correct" => false]);
		$answer->create(["answer" => "b. B-O-T Project", "question_id" => 34, "correct" => false]);
		$answer->create(["answer" => "c. Management Contract", "question_id" => 34, "correct" => false]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 34, "correct" => true]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 34, "correct" => false]);


		$answer->create(["answer" => "a. Assembly or sub-assembly subcontracting", "question_id" => 35, "correct" => false]);
		$answer->create(["answer" => "b. Components manufacture", "question_id" => 35, "correct" => false]);
		$answer->create(["answer" => "c. Discrete treatment", "question_id" => 15, "correct" => false]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 35, "correct" => false]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 35, "correct" => true]);

		$answer->create(["answer" => "a. Profits shared", "question_id" => 36, "correct" => true]);
		$answer->create(["answer" => "b. Lowering cost", "question_id" => 36, "correct" => false]);
		$answer->create(["answer" => "c. Penetrating protected markets", "question_id" => 36, "correct" => false]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 36, "correct" => false]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 36, "correct" => false]);

		$answer->create(["answer" => "a. Technocentric", "question_id" => 37, "correct" => false]);
		$answer->create(["answer" => "b. Ecocentric", "question_id" => 37, "correct" => true]);
		$answer->create(["answer" => "c. Sociocentric", "question_id" => 37, "correct" => false]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 37, "correct" => false]);
		$answer->create(["answer" => "e. All of the above", "question_id" => 37, "correct" => false]);

		$answer->create(["answer" => "a. An Area of Professional Practice", "question_id" => 38, "correct" => false]);
		$answer->create(["answer" => "b. A Body of Knowledge", "question_id" => 38, "correct" => false]);
		$answer->create(["answer" => "c. An Established Organization", "question_id" => 38, "correct" => true]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 38, "correct" => false]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 38, "correct" => false]);

		$answer->create(["answer" => "a. Clusters of large national firms and local suppliers.", "question_id" => 39, "correct" => false]);
		$answer->create(["answer" => "b. Clusters of micro, small and medium enterprises ", "question_id" => 39, "correct" => false]);
		$answer->create(["answer" => "c. Subsidiaries of MNCs and local suppliers ", "question_id" => 39, "correct" => false]);
		$answer->create(["answer" => "d. All of the above", "question_id" => 39, "correct" => true]);
		$answer->create(["answer" => "e. None of the above", "question_id" => 39, "correct" => false]);

		$answer->create(["answer" => "a. Horizontal FDI", "question_id" => 40, "correct" => false]);
		$answer->create(["answer" => "b. Vertical FDI", "question_id" => 40, "correct" => false]);
		$answer->create(["answer" => "c. Conglomerate FDI", "question_id" => 40, "correct" => false]);
		$answer->create(["answer" => "d. All of the above.", "question_id" => 40, "correct" => false]);
		$answer->create(["answer" => "e. None of the above.", "question_id" => 40, "correct" => true]);
		
		//course 5

		$question = new App\Tof;

		$question->create(["question" => "<strong>1. Vertical Technology Transfer is the transfer of a mature or commercialized technology from one organization in a specific socio-economic context to another organization in a different socioeconomic context, through intra-firm, inter-firm, cross industry, regional, or international channels.</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>2. International technology transfer is the transnational or transborder diffusion of technology (usually, a mature technology) from one country to another through market or non-market channels as a manifestation of the globalization of technology.</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>3. The Licensor is responsible for product warranty and other agreed deeds (custody of secrecy, etc.) while the Licensee is Responsible for granting technology, including training, materials, etc. </strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>4. International Outsourcing is also referred to as International Contracting Out or Subcontracting</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>5. Own Design Manufacturing produces according to a foreign firm’s specifications, completes finished goods that are then sold under that foreign firm’s brand name and through its own distribution channels, enables the foreign firm to capture the large post manufacturing value-added.</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>6. A diversifying strategic alliance allows a firm to expand into new product or market areas without completing a merger or an acquisition.</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>7. Foreign Direct Investment is the same with Foreign Portfolio Investment.</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>8. Technology Licensing is a discipline that makes it possible to transfer technology from a proprietor (the licensor) to an interested purchaser (the licensee) in a well defined and effective manner.</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>9. External Technology Acquisition is the process of making technology through R&D efforts initiated and controlled by the firm or organization itself.</strong>", "course_id" => 5]);
		$question->create(["question" => "<strong>10. Reverse engineering is the process of discovering the technological principles of a device, object, or system through analysis of its structure, function, and operation.</strong>", "course_id" => 5]);

		$answer = new App\TofAnswer;

		$answer->create(["answer" => "true", "tof_id" => 31, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 31, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 32, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 32, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 33, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 33, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 34, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 34, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 35, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 35, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 36, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 36, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 37, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 37, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 38, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 38, "correct" => false]);

		$answer->create(["answer" => "true", "tof_id" => 39, "correct" => false]);
		$answer->create(["answer" => "false", "tof_id" => 39, "correct" => true]);

		$answer->create(["answer" => "true", "tof_id" => 40, "correct" => true]);
		$answer->create(["answer" => "false", "tof_id" => 40, "correct" => false]);		

    }
}
