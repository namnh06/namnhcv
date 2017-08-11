<!DOCTYPE html>
<html lang="en" class="theme-color-07cb79 theme-skin-light">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Nam Nguyen Hai Resume">
	<meta name="description"
		  content="Nam's website, this is my resume, check it out !!!">
	<meta property="og:title" content="Nam Nguyen Hai Resume"/>
	<title>@yield('title')</title>
	<base href="{{asset('')}}">
	<!-- Favicon -->
	<link rel="shortcut icon"
		  type="image/ico"
		  href="asset/frontend/img/favicon.png"/>

	<!-- Google Fonts -->
	<link rel="stylesheet"
		  type="text/css"
		  href="https://fonts.googleapis.com/css?family=Fredoka+One">
	<link rel="stylesheet"
		  type="text/css"
		  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">

	<!-- Icon Fonts -->
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/fonts/map-icons/css/map-icons.min.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/fonts/icomoon/style.css">

	<!-- Styles -->
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/js/plugins/jquery.bxslider/jquery.bxslider.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/js/plugins/jquery.customscroll/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/js/plugins/jquery.mediaelement/mediaelementplayer.min.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/js/plugins/jquery.fancybox/jquery.fancybox.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/js/plugins/jquery.owlcarousel/owl.carousel.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/js/plugins/jquery.owlcarousel/owl.theme.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/js/plugins/jquery.optionpanel/option-panel.css">
	<link rel="stylesheet" type="text/css" href="asset/frontend/style.css">
	<link rel="stylesheet"
		  type="text/css"
		  href="asset/frontend/colors/theme-color.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Modernizer for detect what features the user’s browser has to offer -->
	<script type="text/javascript"
			src="asset/frontend/js/libs/modernizr.js"></script>

	<!-- Google Analitics -->
	<!-- <script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-71657642-1', 'auto');
		ga('send', 'pageview');
	</script> -->
</head>

<body class="home header-has-img loading">

<div class="mobile-nav">
	<button class="btn-mobile mobile-nav-close">
		<i class="rsicon rsicon-close"></i></button>

	<div class="mobile-nav-inner">
		<nav id="mobile-nav" class="nav">
			<ul class="clearfix">
				<li><a href="#about">About</a></li>
				<li><a href="#skills">Skills</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#experience">Experience</a></li>
				<li><a href="#references">References</a></li>
				<li>
					<a href="#">Blog</a>
				</li>
				<li><a href="#calendar">Calendar <span></span></a></li>
				<li><a href="#contact">Contact <span></span></a></li>
			</ul>
		</nav>
	</div>
</div>
<!-- .mobile-nav -->

<div class="sidebar sidebar-fixed">
	<button class="btn-sidebar btn-sidebar-close">
		<i class="rsicon rsicon-close"></i></button>

	<div class="widget-area">
		<aside class="widget widget-profile">
			<div class="profile-photo">
				<img src="asset/frontend/img/uploads/rs-photo-v2.jpg"
					 alt="Nam Nguyen Hai"/>
			</div>
			<div class="profile-info">
				<h2 class="profile-title">Nam Nguyen Hai</h2>
				<h3 class="profile-position">Developer and Startup entrepreneur</h3>
			</div>
		</aside>
		<!-- .widget-profile -->

		<aside class="widget widget_search">
			<h2 class="widget-title">Search</h2>
			<form class="search-form">
				<label class="ripple">
					<span class="screen-reader-text">Search for:</span>
					<input class="search-field"
						   type="search"
						   placeholder="Search">
				</label>
				<input type="submit" class="search-submit" value="Search">
			</form>
		</aside>
		<!-- .widget_search -->

		<aside class="widget widget_contact">
			<h2 class="widget-title">Contact Me</h2>
			<form class="contactForm"
				  action="php/contact_form.php"
				  method="post">
				<div class="input-field">
					<input class="contact-name" type="text" name="name"/>
					<span class="line"></span>
					<label>Name</label>
				</div>

				<div class="input-field">
					<input class="contact-email" type="email" name="email"/>
					<span class="line"></span>
					<label>Email</label>
				</div>

				<div class="input-field">
					<input class="contact-subject" type="text" name="subject"/>
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
		</aside>
		<!-- .widget_contact -->

	</div>
	<!-- .widget-area -->
</div>

<!-- .sidebar -->
<div class="wrapper">
	<header class="header">
		<div class="head-bg"
			 style="background-image: url('asset/frontend/img/uploads/rs-cover.jpg')"></div>

		<div class="head-bar">
			<div class="head-bar-inner">
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<a class="logo"
						   href="{{route('index')}}"><span>Nam</span> Nguyen Hai</a>
						<!-- <a class="head-logo" href=""><img src="asset/frontend/img/rs-logo.png" alt="RScard"/></a> -->
					</div>

					<div class="col-sm-9 col-xs-6">
						<div class="nav-wrap">
							<nav id="nav" class="nav">
								<ul class="clearfix">
									<li><a href="#about">About</a></li>
									<li><a href="#skills">Skills</a></li>
									<li><a href="#portfolio">Portfolio</a></li>
									<li><a href="#experience">Experience</a>
									</li>
									<li><a href="#references">References</a>
									</li>
									<li>
										<a href="#">Blog</a>
									</li>
									<li><a href="#calendar">Calendar
											<span></span></a></li>
									<li><a href="#contact">Contact <span></span></a>
									</li>
								</ul>
							</nav>

							<button class="btn-mobile btn-mobile-nav">Menu</button>
							<button class="btn-sidebar btn-sidebar-open"><i
										class="rsicon rsicon-menu"></i></button>
						</div>
						<!-- .nav-wrap -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- .header -->

	@yield('content')

	<footer class="footer">
		<div class="footer-social">
			<ul class="social">
				<li>
					<a
							class="ripple-centered" href="https://www.facebook.com/hainam37k16.1" target="_blank">
					<i class="rsicon rsicon-facebook"></i>
					</a>
				</li>
				<li><a class="ripple-centered"
					   href=""
					   target="_blank"><i class="rsicon rsicon-twitter"></i></a>
				</li>
				<li><a class="ripple-centered"
					   href=""
					   target="_blank"><i class="rsicon rsicon-linkedin"></i></a>
				</li>
				<li><a class="ripple-centered"
					   href=""
					   target="_blank"><i class="rsicon rsicon-google-plus"></i></a>
				</li>
				<li><a class="ripple-centered"
					   href=""
					   target="_blank"><i class="rsicon rsicon-dribbble"></i></a>
				</li>
				<li><a class="ripple-centered"
					   href=""
					   target="_blank"><i class="rsicon rsicon-instagram"></i></a>
				</li>
			</ul>
		</div>
	</footer>
	<!-- .footer -->
</div>
<!-- .wrapper -->

<a class="btn-scroll-top" href="#"><i class="rsicon rsicon-arrow-up"></i></a>
<div id="overlay"></div>
<div id="preloader">
	<div class="preload-icon"><span></span><span></span></div>
	<div class="preload-text">Loading ...</div>
</div>

<!-- Scripts -->
{{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKgydlTDVNzwQoHNpzydyipQm_qkzdhiI"></script>
<script type="text/javascript" src="asset/frontend/js/site.min.js"></script>
<script type="text/javascript" src="asset/frontend/js/namnh.js"></script>
</body>

</html>