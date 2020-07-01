<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<!-- Owl Theme Default CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<!-- Owl Magnific CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- Boxicons CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
	<!-- Meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
	<!-- Odometer CSS-->
	<link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

	<!-- Title -->
	<title>Genicks - Refurbished Computer and Sales Services</title>
</head>

<body>
	<!-- Start Preloader Area -->
	<div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Heder Area -->
	<header class="header-area fixed-top">
		<div class="top-header-area">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-8">
						<ul class="header-content-left">
							<li>
								<a href="mailto:hello@genicks.com">
									<i class="bx bx-envelope"></i>
									Email: hello@genicks.com
								</a>
							</li>

							<li>
								<i class="bx bx-location-plus"></i>
								5501 Peachtree Corners CIR STE 200.
							</li>
						</ul>
					</div>

					<div class="col-lg-6 col-sm-4">
						<ul class="header-content-right">
							<li>
								<a href="#" target="_blank">
									<i class="bx bxl-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="bx bxl-twitter"></i>
								</a>
							</li>

							<li>
								<a href="#" target="_blank">
									<i class="bx bxl-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="bx bxl-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Start Navbar Area -->
		<div class="nav-area">
			<div class="navbar-area">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="/" class="logo">
						<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
					</a>
				</div>

				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md">
						<div class="container-fluid">
							<a class="navbar-brand" href="/">
								<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
							</a>

							<div class="collapse navbar-collapse mean-menu">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="/" class="nav-link active">Home</a>
									</li>
									<li class="nav-item">
										<a href="/about" class="nav-link">About</a>
									</li>
									<li class="nav-item">
										<a href="/services" class="nav-link">Services</a>
									</li>
									<li class="nav-item">
										<a href="/products" class="nav-link">Products</a>
									</li>
									<li class="nav-item">
										<a href="/pricing" class="nav-link">Pricing</a>
									</li>
									
									<li class="nav-item">
										<a href="/contact" class="nav-link">Contact</a>
									</li>
								</ul>

								<!-- Start Other Option -->
								<div class="others-option">
									<div class="get-quote">
										<a href="#" class="default-btn">
											Get A Quote
										</a>
									</div>
								</div>
								<!-- End Other Option -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Navbar Area -->
	</header>
	<!-- End Heder Area -->
	
	@yield('content')
	
	<!-- Start Footer Top Area -->
	<footer class="footer-top-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-widget contact">
						<h3>Contact Us</h3>

						<ul>
							<li class="pl-0">
								<a href="tel:Phone:+892-569-756">
									<i class="bx bx-phone-call"></i>
									<span>Hotline:</span>
									Phone: +892-569-756
								</a>
							</li>

							<li class="pl-0">
								<a href="mailto:hello@surety.com">
									<i class="bx bx-envelope"></i>
									<span>Email:</span>
									hello@genicks.com
								</a>
							</li>

							<li>
								<i class="bx bx-location-plus"></i>
								<span>Address:</span>
								658 Lane Drive st Riverside. California
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-widget">
						<h3>Services Link</h3>

						<ul>
							<li>
								<a href="/">
									<i class="bx bx-chevrons-right"></i>
									Home
								</a>
							</li>
							<li>
								<a href="/about">
									<i class="bx bx-chevrons-right"></i>
									About
								</a>
							</li>
							<li>
								<a href="/services">
									<i class="bx bx-chevrons-right"></i>
									Services
								</a>
							</li>
							<li>
								<a href="/products">
									<i class="bx bx-chevrons-right"></i>
									Products
								</a>
							</li>
							
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-widget">
						<h3>Support & Help</h3>

						<ul>
							<li>
								<a href="/quote">
									<i class="bx bx-chevrons-right"></i>
									Quote Form
								</a>
							</li>
							<li>
								<a href="/contact">
									<i class="bx bx-chevrons-right"></i>
									Contact Form
								</a>
							</li>
							<li>
								<a href="/faq">
									<i class="bx bx-chevrons-right"></i>
									FAQ Questions
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bx bx-chevrons-right"></i>
									24/7 Support for Help
								</a>
							</li>
						
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-widget">
						<h3>Policy Links</h3>

						<ul>
							<li>
								<a href="/terms_and_conditions">
									<i class="bx bx-chevrons-right"></i>
									Terms and Conditions
								</a>
							</li>
							<li>
								<a href="/privacy_policy">
									<i class="bx bx-chevrons-right"></i>
									Privacy Policy
								</a>
							</li>
							
							<li>
								<a href="#">
									<i class="bx bx-chevrons-right"></i>
									Return Policy
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Top Area -->

	<!-- Start Footer Bottom Area -->
	<footer class="footer-bottom-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="copy-right">
						<p>Copyright @2020 Genicks. Designed <a href="https://vivvaa.com/" target="blank">Vivvaa</a></p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="condition-privacy">
						<ul>
							<li>
								<a href="/terms_and_conditions">Terms & Condition</a>
							</li>
							<li>
								<a href="/privacy_policy">Privacy Policy</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Bottom Area -->

	<!-- Start Go Top Area -->
	<div class="go-top">
		<i class='bx bx-chevrons-up'></i>
		<i class='bx bx-chevrons-up'></i>
	</div>
	<!-- End Go Top Area -->


	<!-- Jquery-3.5.1.Slim.Min.JS -->
	<script src="{{asset('assets/js/jquery-3.5.1.slim.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- Meanmenu JS -->
	<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
	<!-- Wow JS -->
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
	<!-- Owl Magnific JS -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
	<!-- Parallax JS -->
	<script src="{{asset('assets/js/parallax.min.js')}}"></script>
	<!-- Appear JS -->
	<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
	<!-- Odometer JS -->
	<script src="{{asset('assets/js/odometer.min.js')}}"></script>
	<!-- Form Validator JS -->
	<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
	<!-- Contact JS -->
	<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
	<!-- Ajaxchimp JS -->
	<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<!-- Custom JS -->
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>