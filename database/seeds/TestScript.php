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
		//course 5

		$question = new App\Question;

		$question->create(["question" => "1. Which of the following is NOT a channel of International Technology Transfer?", "course_id" => 5]);
		$question->create(["question" => "2. Which of the following is a disadvantage of International Franchising?", "course_id" => 5]);

		$question->create(["question" => "3. Which of the following is NOT a type of Functional Alliances?", "course_id" => 5]);
		$question->create(["question" => "4. Which of the following is a major form of International Contracting?", "course_id" => 5]);


		$question->create(["question" => "5. Which of the following is NOT a type of Subcontracting?", "course_id" => 5]);


		$question->create(["question" => "6. Which of the following is a disadvantage of International Joint Venture?", "course_id" => 5]);
		$question->create(["question" => "7. Which of the following is NOT a perspective of Technology Implementation?", "course_id" => 5]);
		$question->create(["question" => "8. Which of the following is NOT a definition of Change Management?", "course_id" => 5]);

		$question->create(["question" => "9. Which of the following is a type of industrial cluster in developing countries?", "course_id" => 5]);
		$question->create(["question" => "10. Which of the following is NOT a classification of Foreign Direct Investment?", "course_id" => 5]);

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

		$question->create(["question" => "1. Vertical Technology Transfer is the transfer of a mature or commercialized technology from one organization in a specific socio-economic context to another organization in a different socioeconomic context, through intra-firm, inter-firm, cross industry, regional, or international channels.", "course_id" => 5]);
		$question->create(["question" => "2. International technology transfer is the transnational or transborder diffusion of technology (usually, a mature technology) from one country to another through market or non-market channels as a manifestation of the globalization of technology.", "course_id" => 5]);
		$question->create(["question" => "3. The Licensor is responsible for product warranty and other agreed deeds (custody of secrecy, etc.) while the Licensee is Responsible for granting technology, including training, materials, etc. ", "course_id" => 5]);
		$question->create(["question" => "4. International Outsourcing is also referred to as International Contracting Out or Subcontracting", "course_id" => 5]);
		$question->create(["question" => "5. Own Design Manufacturing produces according to a foreign firm’s specifications, completes finished goods that are then sold under that foreign firm’s brand name and through its own distribution channels, enables the foreign firm to capture the large post manufacturing value-added.", "course_id" => 5]);
		$question->create(["question" => "6. A diversifying strategic alliance allows a firm to expand into new product or market areas without completing a merger or an acquisition.", "course_id" => 5]);
		$question->create(["question" => "7. Foreign Direct Investment is the same with Foreign Portfolio Investment.", "course_id" => 5]);
		$question->create(["question" => "8. Technology Licensing is a discipline that makes it possible to transfer technology from a proprietor (the licensor) to an interested purchaser (the licensee) in a well defined and effective manner.", "course_id" => 5]);
		$question->create(["question" => "9. External Technology Acquisition is the process of making technology through R&D efforts initiated and controlled by the firm or organization itself.", "course_id" => 5]);
		$question->create(["question" => "10. Reverse engineering is the process of discovering the technological principles of a device, object, or system through analysis of its structure, function, and operation.", "course_id" => 5]);

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
