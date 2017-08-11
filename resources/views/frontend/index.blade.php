@extends('frontend.master')
@section('title','Nam Nguyen Hai')
@section('content')


	<div class="content">
		<div class="container">

			<!-- START: PAGE CONTENT -->
			<section id="about" class="section section-about">
				<div class="animate-up">
					<div class="section-box">
						<div class="profile">
							<div class="row">
								<div class="col-xs-5">
									<div class="profile-photo">
										<img src="asset/frontend/img/uploads/rs-photo-v1.jpg"
											 alt="Nam Nguyen Hai"/></div>
								</div>
								<div class="col-xs-7">
									<div class="profile-info">
										<div class="profile-preword">
											<span>Hello</span></div>
										<h1 class="profile-title">
											<span>I'm</span> Nam Nguyen Hai</h1>
										<h2 class="profile-position">Website Developer and Businessman</h2>
									</div>
									<ul class="profile-list">
										<li class="clearfix">
											<strong class="title">D.O.B</strong>
											<span class="cont">06-Oct-1992</span>
										</li>
										<li class="clearfix">
											<strong class="title">Address</strong>
											<span class="cont">K01b/95 Le Trong Tan St, Thanh Khe District, Da Nang City, VN</span>
										</li>
										<li class="clearfix">
											<strong class="title">E-mail</strong>
											<span class="cont"><a href="mailto:namnh.webiste@gmail.com">namnh.webiste@gmail.com</a></span>
										</li>
										<li class="clearfix">
											<strong class="title">Phone</strong>
											<span class="cont"><a href="tel:+84932578992">+84 932 578 992</a></span>
										</li>
										<li class="clearfix">
											<strong class="title">Freelance</strong>
											<span class="cont">from October, 2016</span>
										</li>
										<li class="clearfix">
											<strong class="title"><span class="button">Available</span></strong>
											<span class="cont"><i class="rsicon rsicon-calendar"></i>till September, 2017</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="profile-social">
							<ul class="social">
								<li><a class="ripple-centered"
									   href="https://www.facebook.com/hainam37k16.1"
									   target="_blank"><i class="rsicon rsicon-facebook"></i></a>
								</li>
								<li><a class="ripple-centered"
									   href="https://twitter.com"
									   target="_blank"><i class="rsicon rsicon-twitter"></i></a>
								</li>
								<li><a class="ripple-centered"
									   href="https://www.linkedin.com"
									   target="_blank"><i class="rsicon rsicon-linkedin"></i></a>
								</li>
								<li><a class="ripple-centered"
									   href="https://plus.google.com"
									   target="_blank"><i class="rsicon rsicon-google-plus"></i></a>
								</li>
								{{--<li><a class="ripple-centered" href="https://dribbble.com" target="_blank"><i class="rsicon rsicon-dribbble"></i></a></li>--}}
								<li><a class="ripple-centered"
									   href="https://www.instagram.com"
									   target="_blank"><i class="rsicon rsicon-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="section-txt-btn">
						<p><a class="btn btn-lg btn-border ripple"
							  target="_blank"
							  href="{{route('download-resume')}}">Download My Resume</a>
						</p>
						<p><a class="btn btn-lg btn-border ripple"
							  target="_blank"
							  href="https://drive.google.com/drive/folders/0B3eGj7-o9viqRmw2cnFFQjRJVFU?usp=sharing">Wanna See Something ?</a>
						</p>
						<p>Hello! I’m Nam Nguyen Hai. Web Developer specializing in back end development. I have a passion for technology. So, after graduated at Da Nang University of Economics, i decided to become a website developer. Then, i'm here with my skills : PHP, SQL, HTML, CSS, JavaScript and some Framework.</p>
					</div>
				</div>
			</section>
			<!-- #about -->

			<section id="skills" class="section section-skills">
				<div class="animate-up">
					<h2 class="section-title">Professional Skills</h2>
					<div class="section-box">
						<div class="row">
							<div class="col-sm-6">
								<div class="progress-bar">
									<div class="bar-data">
										<span class="bar-title">HTML5, CSS3, JavaScript</span>
										<span class="bar-value">80%</span>
									</div>
									<div class="bar-line">
										<span class="bar-fill"
											  data-width="80%"></span>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="progress-bar">
									<div class="bar-data">
										<span class="bar-title">PHP & MySQL</span>
										<span class="bar-value">80%</span>
									</div>
									<div class="bar-line">
										<span class="bar-fill"
											  data-width="80%"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="progress-bar">
									<div class="bar-data">
										<span class="bar-title">PHP - Laravel Framework</span>
										<span class="bar-value">80%</span>
									</div>
									<div class="bar-line">
										<span class="bar-fill"
											  data-width="80%"></span>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="progress-bar">
									<div class="bar-data">
										<span class="bar-title">English</span>
										<span class="bar-value">85%</span>
									</div>
									<div class="bar-line">
										<span class="bar-fill"
											  data-width="85%"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="progress-bar">
									<div class="bar-data">
										<span class="bar-title">Self-Study</span>
										<span class="bar-value">100%</span>
									</div>
									<div class="bar-line">
										<span class="bar-fill"
											  data-width="100%"></span>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="progress-bar">
									<div class="bar-data">
										<span class="bar-title">Photoshop</span>
										<span class="bar-value">75%</span>
									</div>
									<div class="bar-line">
										<span class="bar-fill"
											  data-width="75%"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- #skills -->

			<section id="portfolio" class="section section-portfolio">
				<div class="animate-up">
					<h2 class="section-title">Portfolio</h2>

					<div class="filter">
						<p><a class="btn btn-lg btn-border ripple"
							  target="_blank"
							  href="https://github.com/namnh06">Check Out My GitHub <i class="fa fa-github fa-1x" aria-hidden="true"></i></a>
						</p>
						<div class="filter-inner">
							<div class="filter-btn-group">
								<button data-filter="*">All</button>
								<button data-filter=".photography">Website</button>
								<button data-filter=".nature">Others</button>
							</div>
							<div class="filter-bar">
								<span class="filter-bar-line"></span>
							</div>
						</div>
					</div>

					<div class="grid">
						<div class="grid-sizer"></div>

						<div class="grid-item size22 photography">
							<div class="grid-box">
								<figure class="portfolio-figure">
									<img src="asset/frontend/img/uploads/portfolio/portfolio-thumb-05-610x600.jpg"
										 alt=""/>
									<figcaption class="portfolio-caption">
										<div class="portfolio-caption-inner">
											<h3 class="portfolio-title">Street Photography</h3>
											<h4 class="portfolio-cat">Photography</h4>

											<div class="btn-group">
												<a class="btn-link"
												   href="http://bit.ly/1YtB8he"
												   target="_blank"><i class="rsicon rsicon-link"></i></a>
												<a class="portfolioFancybox btn-zoom"
												   data-fancybox-group="portfolioFancybox1"
												   href="#portfolio1-inline1"><i
															class="rsicon rsicon-eye"></i></a>
												<a class="portfolioFancybox hidden"
												   data-fancybox-group="portfolioFancybox1"
												   href="#portfolio1-inline2"></a>
												<a class="portfolioFancybox hidden"
												   data-fancybox-group="portfolioFancybox1"
												   href="#portfolio1-inline3"></a>
											</div>
										</div>
									</figcaption>
								</figure>

								<!-- Start: Portfolio Inline Boxes -->
								<div id="portfolio1-inline1"
									 class="fancybox-inline-box">
									<div class="inline-embed"
										 data-embed-type="image"
										 data-embed-url="img/uploads/portfolio/portfolio-thumb-05-large.jpg"></div>
									<div class="inline-cont">
										<h2 class="inline-title">Street photography is photography that features the chance encounters and random accidents within public places.</h2>
										<div class="inline-text">
											<p>Street photography does not necessitate the presence of a street or even the urban environment. Though people usually feature directly, street photography might be absent of people and can be an object or
												environment where the image projects a decidedly human character in facsimile or aesthetic.</p>
										</div>
									</div>
								</div>

								<div id="portfolio1-inline2"
									 class="fancybox-inline-box">
									<div class="inline-embed"
										 data-embed-type="image"
										 data-embed-url="img/uploads/portfolio/portfolio-thumb-01-large.jpg"></div>
									<div class="inline-cont">
										<div class="inline-text">
											<h2 class="inline-title">Framing and timing</h2>
											<p>Framing and timing can be key aspects of the craft with the aim of some street photography being to create images at a decisive or poignant moment. Street photography can focus on emotions displayed, thereby
												also recording people's history from an emotional point of view.</p>
										</div>
									</div>
								</div>

								<div id="portfolio1-inline3"
									 class="fancybox-inline-box">
									<div class="inline-embed"
										 data-embed-type="iframe"
										 data-embed-url="https://player.vimeo.com/video/118244244"></div>
									<div class="inline-cont">
										<div class="inline-text">
											<h2 class="inline-title">A Look Into Documenting Street Fashion Photography</h2>
											<p>HB Nam is an internationally known street fashion photographer. In this Leica Camera Portrait, Nam explains how he started in photography and what photography means to him. For Nam, it's about documenting
												what's around him and the concentration required to achieve a good shot.</p>
										</div>
									</div>
								</div>
								<!-- End: Portfolio Inline Boxes -->
							</div>
						</div>
						<!-- .grid-item -->

						<div class="grid-item size11 bridge">
							<div class="grid-box">
								<figure class="portfolio-figure">
									<img src="asset/frontend/img/uploads/portfolio/portfolio-thumb-11-289x281.jpg"
										 alt=""/>
									<figcaption class="portfolio-caption">
										<div class="portfolio-caption-inner">
											<h3 class="portfolio-title">Suspension Bridge</h3>
											<h4 class="portfolio-cat">Bridge</h4>

											<div class="btn-group">
												<a class="btn-link"
												   href="http://bit.ly/1YtB8he"
												   target="_blank"><i class="rsicon rsicon-link"></i></a>
												<a class="portfolioFancybox btn-zoom"
												   data-fancybox-group="portfolioFancybox2"
												   href="#portfolio2-inline1"><i
															class="rsicon rsicon-eye"></i></a>
											</div>
										</div>
									</figcaption>
								</figure>

								<!-- Start: Portfolio Inline Boxes -->
								<div id="portfolio2-inline1"
									 class="fancybox-inline-box">
									<div class="inline-cont">
										<h2 class="inline-title">Suspension Bridges - Design Technology</h2>
										<div class="inline-text">
											<p>Suspension bridges in their simplest form were originally made from rope and wood. Modern suspension bridges use a box section roadway supported by high tensile strength cables. In the early nineteenth century,
												suspension bridges used iron chains for cables. The high tensile cables used in most modern suspension bridges were introduced in the late nineteenth century.<br/> Today, the cables are made of thousands
												of individual steel wires bound tightly together. Steel, which is very strong under tension, is an ideal material for cables; a single steel wire, only 0.1 inch thick, can support over half a ton without
												breaking.
											</p>
											<p>Light, and strong, suspension bridges can span distances from 2,000 to 7,000 feet far longer than any other kind of bridge. They are ideal for covering busy waterways.</p>
											<p>With any bridge project the choice of materials and form usually comes down to cost. Suspension bridges tend to be the most expensive to build. A suspension bridge suspends the roadway from huge main cables,
												which extend from one end of the bridge to the other. These cables rest on top of high towers and have to be securely anchored into the bank at either end of the bridge. The towers enable the main cables
												to be draped over long distances. Most of the weight or load of the bridge is transferred by the cables to the anchorage systems. These are imbedded in either solid rock or huge concrete blocks. Inside
												the anchorages, the cables are spread over a large area to evenly distribute the load and to prevent the cables from breaking free.</p>
											<p>The Arthashastra of Kautilya mentions the construction of dams and bridges.A Mauryan bridge near Girnar was surveyed by James Princep. The bridge was swept away during a flood, and later repaired by Puspagupta,
												the chief architect of emperor Chandragupta I. The bridge also fell under the care of the Yavana Tushaspa, and the Satrap Rudra Daman. The use of stronger bridges using plaited bamboo and iron chain
												was visible in India by about the 4th century. A number of bridges, both for military and commercial purposes, were constructed by the Mughal administration in India.</p>
										</div>
									</div>
								</div>
								<!-- End: Portfolio Inline Boxes -->
							</div>
						</div>
						<!-- .grid-item -->

						<div class="grid-item size11 nature photography">
							<div class="grid-box">
								<figure class="portfolio-figure">
									<img src="asset/frontend/img/uploads/portfolio/portfolio-thumb-08-289x281.jpg"
										 alt=""/>
									<figcaption class="portfolio-caption">
										<div class="portfolio-caption-inner">
											<h3 class="portfolio-title">Rocky Mountains</h3>
											<h4 class="portfolio-cat">Nature, Photography</h4>

											<div class="btn-group">
												<a class="btn-link"
												   href="http://bit.ly/1YtB8he"
												   target="_blank"><i class="rsicon rsicon-link"></i></a>
												<a class="portfolioFancybox btn-zoom"
												   data-fancybox-group="portfolioFancybox3"
												   href="#portfolio3-inline1"><i
															class="rsicon rsicon-eye"></i></a>
												<a class="portfolioFancybox hidden"
												   data-fancybox-group="portfolioFancybox3"
												   href="#portfolio3-inline2"></a>
												<a class="portfolioFancybox hidden"
												   data-fancybox-group="portfolioFancybox3"
												   href="#portfolio3-inline3"></a>
											</div>
										</div>
									</figcaption>
								</figure>

								<!-- Start: Portfolio Inline Boxes -->
								<div id="portfolio3-inline1"
									 class="fancybox-inline-box">
									<div class="inline-embed"
										 data-embed-type="image"
										 data-embed-url="img/uploads/portfolio/portfolio-thumb-08-large.jpg"></div>
								</div>

								<div id="portfolio3-inline2"
									 class="fancybox-inline-box">
									<div class="inline-embed"
										 data-embed-type="image"
										 data-embed-url="img/uploads/portfolio/portfolio-thumb-04-large.jpg"></div>
								</div>

								<div id="portfolio3-inline3"
									 class="fancybox-inline-box">
									<div class="inline-embed"
										 data-embed-type="image"
										 data-embed-url="img/uploads/portfolio/portfolio-thumb-02-large.jpg"></div>
								</div>
								<!-- End: Portfolio Inline Boxes -->
							</div>
						</div>
						<!-- .grid-item -->
					</div>

					<div class="grid-more">
						<span class="ajax-loader"></span>
						<button class="btn btn-border ripple">
							<i class="rsicon rsicon-add"></i></button>
					</div>
				</div>
			</section>
			<!-- #portfolio -->

			<section id="experience" class="section section-experience">
				<div class="animate-up">
					<h2 class="section-title">Work Experience</h2>

					<div class="timeline">
						<div class="timeline-bar"></div>
						<div class="timeline-inner clearfix">
							@foreach($works as $work)
								@if($work->position == 0)
									<div class="timeline-box timeline-box-left">
										<span class="dot"></span>
										<div class="timeline-box-inner animate-right">
											<span class="arrow"></span>
											<div class="date">{{$work->start}} - {{$work->end}}</div>
											<h3>{{$work->company}}</h3>
											<h4>{{$work->job_title}}</h4>
											<p>{!! $work->description !!}</p>
											<i><h4>
													<b>Reference : {{$work->reference}} - {{$work->phone}}</b>
												</h4></i>
										</div>
									</div>
								@else

									<div class="timeline-box timeline-box-right">
										<span class="dot"></span>
										<div class="timeline-box-inner animate-left">
											<span class="arrow"></span>
											<div class="date">{{$work->start}} - {{$work->end}}</div>
											<h3>{{$work->company}}</h3>
											<h4>{{$work->job_title}}</h4>
											<p>{!! $work->description !!}</p>
											<i><h4>
													<b>Reference : {{$work->reference}} - {{$work->phone}}</b>
												</h4></i>
										</div>
									</div>
								@endif
							@endforeach

						</div>
					</div>
				</div>
			</section>
			<!-- #experience -->

			<section id="education" class="section section-education">
				<div class="animate-up">
					<h2 class="section-title">Education</h2>
					<div class="timeline">
						<div class="timeline-bar"></div>
						<div class="timeline-inner clearfix">

							@foreach($educations as $education)
								@if($education->position == 0)
									<div class="timeline-box timeline-box-compact timeline-box-left">
										<span class="dot"></span>

										<div class="timeline-box-inner animate-right">
											<span class="arrow"></span>
											<div class="date">
												<span>{{$education->start}}
													@if($education->end != '')- {{$education->end}}
												@endif</span>
											</div>
											<h3>{!! $education->certificate !!}</h3>
											<h4>{{$education->school}}</h4>
										</div>
									</div>
								@else

									<div class="timeline-box timeline-box-compact timeline-box-right">
										<span class="dot"></span>

										<div class="timeline-box-inner animate-left">
											<span class="arrow"></span>
											<div class="date">
												<span>{{$education->start}}@if($education->end != '')- {{$education->end}}
													@endif</span>
											</div>
											<h3>{{$education->certificate}}</h3>
											<h4>{{$education->school}}</h4>
										</div>
									</div>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- #education -->

			<section id="clients" class="section section-clients">
				<div class="animate-up">

					<div class="clients-carousel">
						<div class="client-logo">
							<a href="http://market.envato.com"
							   target="_blank"><img src="asset/frontend/img/uploads/logos/logo-envato.png"
													title="envato"
													alt="envato"/></a>
						</div>

						<div class="client-logo">
							<img src="asset/frontend/img/uploads/logos/logo-angularjs.png"
								 title="angular js"
								 alt="angular js"/>
						</div>

						<div class="client-logo">
							<a href="https://www.omniref.com/ruby/gems/teaspoon/0.7.9"
							   target="_blank"><img src="asset/frontend/img/uploads/logos/logo-teaspoon.png"
													title="teaspoon"
													alt="teaspoon"/></a>
						</div>

						<div class="client-logo">
							<a href="https://wordpress.com" target="_blank"><img
										src="asset/frontend/img/uploads/logos/logo-wordpress.png"
										title="wordpress"
										alt="wordpress"/></a>
						</div>

						<div class="client-logo">
							<a href="https://evernote.com" target="_blank"><img
										src="asset/frontend/img/uploads/logos/logo-evernote.png"
										title="evernote"
										alt="evernote"/></a>
						</div>

						<div class="client-logo">
							<a href="http://compass-style.org"
							   target="_blank"><img src="asset/frontend/img/uploads/logos/logo-compass.png"
													title="compass"
													alt="compass"/></a>
						</div>

						<div class="client-logo">
							<a href="http://getbootstrap.com"
							   target="_blank"><img src="asset/frontend/img/uploads/logos/logo-bootstrap.png"
													title="bootstrap"
													alt="bootstrap"/></a>
						</div>

						<div class="client-logo">
							<a href="http://jasmine.github.io"
							   target="_blank"><img src="asset/frontend/img/uploads/logos/logo-jasmine.png"
													title="jasmine"
													alt="jasmine"/></a>
						</div>

						<div class="client-logo">
							<a href="https://jquery.com" target="_blank"><img
										src="asset/frontend/img/uploads/logos/logo-jquery.png"
										title="jquery"
										alt="jquery"/></a>
						</div>
					</div>
				</div>
			</section>
			<!-- #clients -->

			<section id="references" class="section section-references">
				<div class="animate-up">
					<h2 class="section-title">References</h2>
					<div class="section-box">
						<ul class="ref-slider">
							<li>
								<div class="ref-box">
									<div class="person-speech">
										<p>I confirm that I have dealt with New Company Ltd since 1998. Their work has been a major factor in our website's success, helping it to become one of the most visited resources of its kind on the Internet.</p>
									</div>
									<div class="person-info clearfix">
										<img class="person-img"
											 src="asset/frontend/img/uploads/rs-avatar-60x60.jpg"
											 alt="Headshot">
										<div class="person-name-title">
											<span class="person-name">Alexander Jokovich</span>
											<span class="person-title">Modern LLC , HR</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ref-box">
									<div class="person-speech">
										<p>I confirm that New Company Ltd has been a customer of ours since 1998, during which time they have always made payments reliably, in full and on time.</p>
									</div>
									<div class="person-info clearfix">
										<img class="person-img"
											 src="asset/frontend/img/uploads/rs-avatar-60x60.jpg"
											 alt="Headshot">
										<div class="person-name-title">
											<span class="person-name">Alexander Jokovich</span>
											<span class="person-title">Modern LLC , HR</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ref-box">
									<div class="person-speech">
										<p>I have known Nam Nguyen Hai for 10 years as web developer. I can confirm that he is a man of great integrity, is extremely dedicated to his family and work, and is entirely peace-loving.</p>
									</div>
									<div class="person-info clearfix">
										<img class="person-img"
											 src="asset/frontend/img/uploads/rs-avatar-60x60.jpg"
											 alt="Headshot">
										<div class="person-name-title">
											<span class="person-name">Alexander Jokovich</span>
											<span class="person-title">Modern LLC , HR</span>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="ref-slider-nav">
							<span id="ref-slider-prev"
								  class="slider-prev"></span>
							<span id="ref-slider-next"
								  class="slider-next"></span>
						</div>
					</div>
				</div>
			</section>
			<!-- #references -->

			<section id="text-section" class="section section-text">
				<div class="animate-up animated">
					<h2 class="section-title">Text Section</h2>
					<div class="section-box">
						<p>Hello! I’m Nam Nguyen Hai and this is custom editor section. You can add here any text or "Strikethrough" text and even you can add bulleted or numbered text and even you will be able to add blockquot text. You can align this
							text to left/right/center. One of the most interesting options is to divide this section to "One half" "One Third" and "One Fourth". You can use this for Honors or Achievments or Awards sections. You can insert images and
							photos right in this editor!</p>
					</div>
				</div>
			</section>
			<!-- #text-section -->

			<section id="interests" class="section section-interests">
				<div class="animate-up">
					<h2 class="section-title">My Interests</h2>

					<div class="section-box">
						<p>I have a keen interest in photography. I was vice-president of the photography club during my time at university, and during this period I organised a number of very successful exhibitions and events both on and off campus.
							<br/>I also play the piano to grade 8 standard.</p>

						<ul class="interests-list">
							<li>
								<i class="map-icon map-icon-bicycling"></i>
								<span>Bicycling</span>
							</li>
							<li>
								<i class="map-icon map-icon-movie-theater"></i>
								<span>Watch Movies</span>
							</li>
							<li>
								<i class="map-icon map-icon-ice-skating"></i>
								<span>Skating</span>
							</li>
							<li>
								<i class="map-icon map-icon-shopping-mall"></i>
								<span>Shopping</span>
							</li>
							<li>
								<i class="map-icon map-icon-tennis"></i>
								<span>Playing Tennis</span>
							</li>
							<li>
								<i class="map-icon map-icon-bowling-alley"></i>
								<span>Playing Bowling</span>
							</li>
							<li>
								<i class="map-icon map-icon-swimming"></i>
								<span>Swimming</span>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- #interests -->

			<section id="calendar" class="section section-calendar">
				<div class="animate-up">
					<h2 class="section-title">Availability Calendar</h2>

					<div class="calendar-busy" data-weekstart="monday">
						<div class="calendar-today"
							 style="background-image: url('asset/frontend/img/uploads/rs-calendar-cover.jpg')">
							<div class="valign-outer">
								<div class="valign-middle">
									<div class="valign-inner">
										<div class="date">
											<span class="day"></span>
											<span class="month"></span>
										</div>
										<div class="week-day"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="calendar-cont">
							<div class="calendar-header">
								<div class="calendar-nav">
									<span class="active-date"><span class="active-month"></span><span
												class="active-year"></span></span>
									<a class="calendar-prev ripple-centered"
									   title="Prev"><i class="rsicon rsicon-chevron_left"></i></a>
									<a class="calendar-next ripple-centered"
									   title="Next"><i class="rsicon rsicon-chevron_right"></i></a>
								</div>
							</div>

							<table class="calendar-body">
								<thead class="calendar-thead"></thead>
								<tbody class="calendar-tbody"></tbody>
							</table>
							<div class="calendar-busy-note">Sorry. I'm not available on those days</div>
						</div>
					</div>
				</div>
			</section>
			<!-- #calendar -->

			<section id="contact" class="section section-contact">
				<div class="animate-up">
					<h2 class="section-title">Contact Me</h2>

					<div class="row">
						<div class="col-sm-6">
							<div class="section-box contact-form">
								<h3>Feel free to contact me</h3>

								<form class="contactForm"
									  action="php/contact_form.php"
									  method="post">
									<div class="input-field">
										<input class="contact-name"
											   type="text"
											   name="name"/>
										<span class="line"></span>
										<label>Name</label>
									</div>

									<div class="input-field">
										<input class="contact-email"
											   type="email"
											   name="email"/>
										<span class="line"></span>
										<label>Email</label>
									</div>

									<div class="input-field">
										<input class="contact-subject"
											   type="text"
											   name="subject"/>
										<span class="line"></span>
										<label>Subject</label>
									</div>

									<div class="input-field">
										<textarea class="contact-message"
												  rows="4"
												  name="message"></textarea>
										<span class="line"></span>
										<label>Message</label>
									</div>

									<span class="btn-outer btn-primary-outer ripple">
											<input class="contact-submit btn btn-lg btn-primary"
												   type="submit"
												   value="Send"/>
										</span>

									<div class="contact-response"></div>
								</form>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="section-box contact-info has-map">
								<ul class="contact-list">
									<li class="clearfix">
										<strong>Address</strong>
										<span>K01b/95 Le Trong Tan St, Thanh Khe District, Da Nang City, VN</span>
									</li>
									<li class="clearfix">
										<strong>phone</strong>
										<span><a href="tel:+84932578992">+84 932 578 992</a></span>
									</li>
									<li class="clearfix">
										<strong>E-mail</strong>
										<span><a href="mailto:namnh.website@gmail.com">namnh.website@gmail.com</a></span>
									</li>
								</ul>

								<div id="map"
									 data-latitude="50.84592"
									 data-longitude="4.366859999999974"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- #contact -->


			<!-- END: PAGE CONTENT -->

		</div>
		<!-- .container -->
	</div>
	<!-- .content -->
@endsection