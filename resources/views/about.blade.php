@extends('layouts.app',['title' => 'COMPASS'])
@section ('content')
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2> About </h2>
					<p class="text-justify flavorText">
						Compass is a comprehensive examination online learning tool for students taking up the graduate program of Master of Technology Management (MTM) under the University of the Philippines Technology Management Center (UPTMC). Compass aims to provide MTM students a repository of relevant materials and a venue to test their knowledge in preparation for the MTM comprehensive examination.
					</p>
					<p class="text-justify flavorText">
						 Compass is made possible by the following MTM students under the supervision of Prof. Paulo Noel G. Paje for TM 291 AY 2016-2017 2nd Semester:
					</p>
				</div>
			</div>
			<div class="row center-block">

				<div class="col-md-2 col-md-offset-1">
					<div class="thumbnail">
						<img src="http://placehold.it/242x200">
						<div class="caption text-center author">
							<strong> Erson C. Caindoy </strong>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class="thumbnail">
						<img src="http://placehold.it/242x200">
						<div class="caption text-center author">
							<strong> Anna May M. Descutido </strong>
						</div>
					</div>
				</div>


				<div class="col-md-2">
					<div class="thumbnail">
						<img src="http://placehold.it/242x200">
						<div class="caption text-center author">
							<strong> Joan Cecile P. Dimaunahan </strong>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class="thumbnail">
						<img src="http://placehold.it/242x200">
						<div class="caption text-center author">
							<strong> Winda B. Gas-ib </strong>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="thumbnail">
						<img src="http://placehold.it/242x200">
						<div class="caption text-center author">
							<strong class=""> Asela Linglingay R. Villanueva-Javier </strong>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-justify flavorText">
						Presentation materials, documents, and other files uploaded in Compass were authored by MTM students as well as the following UPTMC faculty and faculty affiliates:
					</p>
				</div>
			</div>
			<article class="row team">
				<div class="col-md-2 avatar">
					<img src="{{ asset('img/Faculty/ProfEdisonCruz.jpg') }}" />
				</div>
				<div class="col-md-9">
					<h3> <strong> <u> Prof. Edison C. Cruz </u> </strong> </h3>
					<p class="text-justify avatarText flavorText">

						Prof. Cruz is the current Executive Director of the U.P. Technology Management Center and is an accomplished educator, administrator, and consultant in the following fields of expertise: Management of Technology and Innovation, Science and Technology Policy, and Business and Operations Management. He graduated cum laude from the U.P. School of Economics and obtained his MBA degree from the U.P. College of Business Administration.
					</p>
					<p class="text-justify avatarText flavorText">
						In his nearly 20 years of experience in both the corporate sector and academe, Prof. Cruz has served as a project leader and consultant in various government and private sector technology projects, and has been a valued resource speaker in various technology-related training programs.
						<br /> <br />
						<small> <em> Source: http://www.tmc.upd.edu.ph/?page_id=33 </em> </small>
					</p>
				</div>				
			</article>
			<article class="row team">
				<div class="col-md-2 avatar">
					<img src="{{ asset('img/Faculty/ProfGlenImbang.jpg') }}" />
				</div>
				<div class="col-md-9">
					<h3> <strong> <u> Prof. Glen A. Imbang </u> </strong> </h3>
					<p class="text-justify avatarText flavorText">
						Prof. Imbang holds double Masters degrees in MS Biology (U.P. Diliman) and Master of Engineering and Technology Management (University of Queensland), and is also an Asst. Professor at the UP Integrated School. Prof. Imbang has excelled himself in extension, research and research writing, where he has the experience and competence to carry out teaching, research, and consultancy in most areas of Technology Management, particularly as an expert in strategic technology planning and technology forecasting.
					</p>
					<p class="text-justify avatarText flavorText">
						In one of his more outstanding extension achievements, he became the first project leader in the entire country to successfully conduct an actual Technology Foresight project for a major Philippine industry (electronics), thus reaping laurels for UP Diliman from the Department of Science and Technology and the APEC Center for Technology Foresight in Thailand.
						<br /> <br />
						<small> <em> Source: http://www.tmc.upd.edu.ph/?page_id=33 </em> </small>
					</p>
				</div>				
			</article>												
			<article class="row team">
				<div class="col-md-2 avatar">
					<img src="{{ asset('img/Faculty/DrRogerPosadas.png') }}" />
				</div>
				<div class="col-md-9">
					<h3> <strong> <u> Dr. Roger D. Posadas </u> </strong> </h3>
					<p class="text-justify avatarText flavorText">
						Dr. Posadas was a professor at the U.P. Technology Management Center from 2005 to 2016 teaching courses in technology management overview, R&amp;D management, technology acquisition &amp; assimilation, innovation management, national innovation systems, industrial clusters and industrialization, technology transfer from universities, technology planning and roadmapping.						
					</p>
					<p class="text-justify avatarText flavorText">
						Dr. Posadas also gives outside lectures and provides consulting services in technology management, S&amp;T strategies and policies, higher education management, innovation management.
					</p>
					<p class="text-justify avatarText flavorText">
						He was the Chancellor of U.P. Diliman from 1993 to 1996, Dean of the U.P. College of Science from 1983 to 1993, and the Chairman of the Department of Physics in the same college from 1980 to 1982.
						<br /> <br />
						<small> <em> Source: https://ph.linkedin.com/in/roger-posadas-2314b7a </em> </small>
					</p>
				</div>				
			</article>

		</div>
@stop
