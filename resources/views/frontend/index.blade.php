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
										<img src="asset/frontend/img/avatar.png"
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
									   href="skype:live:namnh.website?chat"
									   target="_blank"><i class="rsicon rsicon-skype"></i></a>
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
						<p>Hello! I’m Nam Nguyen Hai. I have got a Bachelor Degree in Business Administration in 2015, after graduated from Danang University of Economics, I spent 2 years on some website courses. Thus, I have a knowledge about HTML, CSS, JavaScript, PHP & SQL.
						I am aspire to be a good manager, a good programmer in technology field, especially Website.</p>
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
										<span class="bar-title">HTML, CSS, JavaScript</span>
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
						{{--<div class="filter-inner">--}}
							{{--<div class="filter-btn-group">--}}
								{{--<button data-filter="*">All</button>--}}
								{{--<button data-filter=".photography">Website</button>--}}
								{{--<button data-filter=".nature">Others</button>--}}
							{{--</div>--}}
							{{--<div class="filter-bar">--}}
								{{--<span class="filter-bar-line"></span>--}}
							{{--</div>--}}
						{{--</div>--}}
					</div>

					{{--<div class="grid">--}}
						{{--<div class="grid-sizer"></div>--}}

						{{--<div class="grid-item size22 photography">--}}
							{{--<div class="grid-box">--}}
								{{--<figure class="portfolio-figure">--}}
									{{--<img src="asset/frontend/img/uploads/portfolio/portfolio-thumb-05-610x600.jpg"--}}
										 {{--alt=""/>--}}
									{{--<figcaption class="portfolio-caption">--}}
										{{--<div class="portfolio-caption-inner">--}}
											{{--<h3 class="portfolio-title">Street Photography</h3>--}}
											{{--<h4 class="portfolio-cat">Photography</h4>--}}

											{{--<div class="btn-group">--}}
												{{--<a class="btn-link"--}}
												   {{--href="http://bit.ly/1YtB8he"--}}
												   {{--target="_blank"><i class="rsicon rsicon-link"></i></a>--}}
												{{--<a class="portfolioFancybox btn-zoom"--}}
												   {{--data-fancybox-group="portfolioFancybox1"--}}
												   {{--href="#portfolio1-inline1"><i--}}
															{{--class="rsicon rsicon-eye"></i></a>--}}
												{{--<a class="portfolioFancybox hidden"--}}
												   {{--data-fancybox-group="portfolioFancybox1"--}}
												   {{--href="#portfolio1-inline2"></a>--}}
												{{--<a class="portfolioFancybox hidden"--}}
												   {{--data-fancybox-group="portfolioFancybox1"--}}
												   {{--href="#portfolio1-inline3"></a>--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</figcaption>--}}
								{{--</figure>--}}

								{{--<!-- Start: Portfolio Inline Boxes -->--}}
								{{--<div id="portfolio1-inline1"--}}
									 {{--class="fancybox-inline-box">--}}
									{{--<div class="inline-embed"--}}
										 {{--data-embed-type="image"--}}
										 {{--data-embed-url="img/uploads/portfolio/portfolio-thumb-05-large.jpg"></div>--}}
									{{--<div class="inline-cont">--}}
										{{--<h2 class="inline-title">Street photography is photography that features the chance encounters and random accidents within public places.</h2>--}}
										{{--<div class="inline-text">--}}
											{{--<p>Street photography does not necessitate the presence of a street or even the urban environment. Though people usually feature directly, street photography might be absent of people and can be an object or--}}
												{{--environment where the image projects a decidedly human character in facsimile or aesthetic.</p>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<div id="portfolio1-inline2"--}}
									 {{--class="fancybox-inline-box">--}}
									{{--<div class="inline-embed"--}}
										 {{--data-embed-type="image"--}}
										 {{--data-embed-url="img/uploads/portfolio/portfolio-thumb-01-large.jpg"></div>--}}
									{{--<div class="inline-cont">--}}
										{{--<div class="inline-text">--}}
											{{--<h2 class="inline-title">Framing and timing</h2>--}}
											{{--<p>Framing and timing can be key aspects of the craft with the aim of some street photography being to create images at a decisive or poignant moment. Street photography can focus on emotions displayed, thereby--}}
												{{--also recording people's history from an emotional point of view.</p>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}

								{{--<div id="portfolio1-inline3"--}}
									 {{--class="fancybox-inline-box">--}}
									{{--<div class="inline-embed"--}}
										 {{--data-embed-type="iframe"--}}
										 {{--data-embed-url="https://player.vimeo.com/video/118244244"></div>--}}
									{{--<div class="inline-cont">--}}
										{{--<div class="inline-text">--}}
											{{--<h2 class="inline-title">A Look Into Documenting Street Fashion Photography</h2>--}}
											{{--<p>HB Nam is an internationally known street fashion photographer. In this Leica Camera Portrait, Nam explains how he started in photography and what photography means to him. For Nam, it's about documenting--}}
												{{--what's around him and the concentration required to achieve a good shot.</p>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<!-- End: Portfolio Inline Boxes -->--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<!-- .grid-item -->--}}

						{{--<div class="grid-item size11 bridge">--}}
							{{--<div class="grid-box">--}}
								{{--<figure class="portfolio-figure">--}}
									{{--<img src="asset/frontend/img/uploads/portfolio/portfolio-thumb-11-289x281.jpg"--}}
										 {{--alt=""/>--}}
									{{--<figcaption class="portfolio-caption">--}}
										{{--<div class="portfolio-caption-inner">--}}
											{{--<h3 class="portfolio-title">Suspension Bridge</h3>--}}
											{{--<h4 class="portfolio-cat">Bridge</h4>--}}

											{{--<div class="btn-group">--}}
												{{--<a class="btn-link"--}}
												   {{--href="http://bit.ly/1YtB8he"--}}
												   {{--target="_blank"><i class="rsicon rsicon-link"></i></a>--}}
												{{--<a class="portfolioFancybox btn-zoom"--}}
												   {{--data-fancybox-group="portfolioFancybox2"--}}
												   {{--href="#portfolio2-inline1"><i--}}
															{{--class="rsicon rsicon-eye"></i></a>--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</figcaption>--}}
								{{--</figure>--}}

								{{--<!-- Start: Portfolio Inline Boxes -->--}}
								{{--<div id="portfolio2-inline1"--}}
									 {{--class="fancybox-inline-box">--}}
									{{--<div class="inline-cont">--}}
										{{--<h2 class="inline-title">Suspension Bridges - Design Technology</h2>--}}
										{{--<div class="inline-text">--}}
											{{--<p>Suspension bridges in their simplest form were originally made from rope and wood. Modern suspension bridges use a box section roadway supported by high tensile strength cables. In the early nineteenth century,--}}
												{{--suspension bridges used iron chains for cables. The high tensile cables used in most modern suspension bridges were introduced in the late nineteenth century.<br/> Today, the cables are made of thousands--}}
												{{--of individual steel wires bound tightly together. Steel, which is very strong under tension, is an ideal material for cables; a single steel wire, only 0.1 inch thick, can support over half a ton without--}}
												{{--breaking.--}}
											{{--</p>--}}
											{{--<p>Light, and strong, suspension bridges can span distances from 2,000 to 7,000 feet far longer than any other kind of bridge. They are ideal for covering busy waterways.</p>--}}
											{{--<p>With any bridge project the choice of materials and form usually comes down to cost. Suspension bridges tend to be the most expensive to build. A suspension bridge suspends the roadway from huge main cables,--}}
												{{--which extend from one end of the bridge to the other. These cables rest on top of high towers and have to be securely anchored into the bank at either end of the bridge. The towers enable the main cables--}}
												{{--to be draped over long distances. Most of the weight or load of the bridge is transferred by the cables to the anchorage systems. These are imbedded in either solid rock or huge concrete blocks. Inside--}}
												{{--the anchorages, the cables are spread over a large area to evenly distribute the load and to prevent the cables from breaking free.</p>--}}
											{{--<p>The Arthashastra of Kautilya mentions the construction of dams and bridges.A Mauryan bridge near Girnar was surveyed by James Princep. The bridge was swept away during a flood, and later repaired by Puspagupta,--}}
												{{--the chief architect of emperor Chandragupta I. The bridge also fell under the care of the Yavana Tushaspa, and the Satrap Rudra Daman. The use of stronger bridges using plaited bamboo and iron chain--}}
												{{--was visible in India by about the 4th century. A number of bridges, both for military and commercial purposes, were constructed by the Mughal administration in India.</p>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<!-- End: Portfolio Inline Boxes -->--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<!-- .grid-item -->--}}

						{{--<div class="grid-item size11 nature photography">--}}
							{{--<div class="grid-box">--}}
								{{--<figure class="portfolio-figure">--}}
									{{--<img src="asset/frontend/img/uploads/portfolio/portfolio-thumb-08-289x281.jpg"--}}
										 {{--alt=""/>--}}
									{{--<figcaption class="portfolio-caption">--}}
										{{--<div class="portfolio-caption-inner">--}}
											{{--<h3 class="portfolio-title">Rocky Mountains</h3>--}}
											{{--<h4 class="portfolio-cat">Nature, Photography</h4>--}}

											{{--<div class="btn-group">--}}
												{{--<a class="btn-link"--}}
												   {{--href="http://bit.ly/1YtB8he"--}}
												   {{--target="_blank"><i class="rsicon rsicon-link"></i></a>--}}
												{{--<a class="portfolioFancybox btn-zoom"--}}
												   {{--data-fancybox-group="portfolioFancybox3"--}}
												   {{--href="#portfolio3-inline1"><i--}}
															{{--class="rsicon rsicon-eye"></i></a>--}}
												{{--<a class="portfolioFancybox hidden"--}}
												   {{--data-fancybox-group="portfolioFancybox3"--}}
												   {{--href="#portfolio3-inline2"></a>--}}
												{{--<a class="portfolioFancybox hidden"--}}
												   {{--data-fancybox-group="portfolioFancybox3"--}}
												   {{--href="#portfolio3-inline3"></a>--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</figcaption>--}}
								{{--</figure>--}}

								{{--<!-- Start: Portfolio Inline Boxes -->--}}
								{{--<div id="portfolio3-inline1"--}}
									 {{--class="fancybox-inline-box">--}}
									{{--<div class="inline-embed"--}}
										 {{--data-embed-type="image"--}}
										 {{--data-embed-url="img/uploads/portfolio/portfolio-thumb-08-large.jpg"></div>--}}
								{{--</div>--}}

								{{--<div id="portfolio3-inline2"--}}
									 {{--class="fancybox-inline-box">--}}
									{{--<div class="inline-embed"--}}
										 {{--data-embed-type="image"--}}
										 {{--data-embed-url="img/uploads/portfolio/portfolio-thumb-04-large.jpg"></div>--}}
								{{--</div>--}}

								{{--<div id="portfolio3-inline3"--}}
									 {{--class="fancybox-inline-box">--}}
									{{--<div class="inline-embed"--}}
										 {{--data-embed-type="image"--}}
										 {{--data-embed-url="img/uploads/portfolio/portfolio-thumb-02-large.jpg"></div>--}}
								{{--</div>--}}
								{{--<!-- End: Portfolio Inline Boxes -->--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<!-- .grid-item -->--}}
					{{--</div>--}}

					{{--<div class="grid-more">--}}
						{{--<span class="ajax-loader"></span>--}}
						{{--<button class="btn btn-border ripple">--}}
							{{--<i class="rsicon rsicon-add"></i></button>--}}
					{{--</div>--}}
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
													<b>{{$work->reference}} - {{$work->phone}}</b>
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
													<b>{{$work->reference}} - {{$work->phone}}</b>
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


			<section id="interests" class="section section-interests">
				<div class="animate-up">
					<h2 class="section-title">My Interests</h2>

					<div class="section-box">
						<p>I have a keen interest in physical sports.
							<br/>I like books and some activities outside.</p>

						<ul class="interests-list">
							<li>
								<i class="rsicon rsicon-futbol-o"></i>
								<span>Football is my favorite sport</span>
							</li>
							<li>
								<i class="map-icon map-icon-gym"></i>
								<span>Body Building</span>
							</li>
							<li>
								<i class="rsicon rsicon-users"></i>
								<span>Communicate with People</span>
							</li>
							<li>
								<i class="rsicon rsicon-twitch"></i>
								<span>I'm watching Twitch right now, lol !</span>
							</li>
							<li>
								<i class="rsicon rsicon-steam-square"></i>
								<span>Esport</span>
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



			<section id="contact" class="section section-contact">
				<div class="animate-up">
					<h2 class="section-title">Contact Me</h2>
					<div class="row">
						<div class="col-sm-6">
							<div class="section-box contact-form">
								<h3>Feel free to contact me</h3>

								<form class="contactForm"
									  action="#"
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
									 data-latitude="16.054407"
									 data-longitude="108.202167"></div>
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