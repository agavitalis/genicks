@extends('layouts.app')

@section('content')
    <!-- Start Banner Area -->
	<section class="banner-area banner-area-two">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="banner-text">
								<span class="wow fadeInDown" data-wow-delay="1s">Experts in Refurbished Computers and Gadgets</span>
								<h1 class="wow fadeInLeft" data-wow-delay="1s">Why call a geek, when you can call a professional?</h1>
								<p class="wow fadeInRight" data-wow-delay="1s">We offer professional high-tech repair solutions, sale of refurbished gadgets, system setup and device installations.</p>

								<div class="banner-btn wow fadeInUp" data-wow-delay="1s">
									<a class="default-btn" href="/bookings">
										Book Now
									</a>
									<a class="default-btn active" href="/about">
										About Us
									</a>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="banner-site-img four wow fadeInDown" data-wow-delay=".6s">
								<img src="{{asset('assets/img/banner-img/home-four/banner.png')}}" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start Partner Area -->
	<div class="partner-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="partner-wrap owl-carousel owl-theme">
					<div class="partner-item">
						<img src="{{asset('assets/img/partner-logo/1.png')}}" alt="Image">
						<a class="partner-overly" href="#">
							<img src="{{asset('assets/img/partner-logo/6.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<img src="{{asset('assets/img/partner-logo/2.png')}}" alt="Image">
						<a class="partner-overly" href="#">
							<img src="{{asset('assets/img/partner-logo/7.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<img src="{{asset('assets/img/partner-logo/3.png')}}" alt="Image">
						<a class="partner-overly" href="#">
							<img src="{{asset('assets/img/partner-logo/8.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<img src="{{asset('assets/img/partner-logo/4.png')}}" alt="Image">
						<a class="partner-overly" href="#">
							<img src="{{asset('assets/img/partner-logo/9.png')}}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<img src="{{asset('assets/img/partner-logo/5.png')}}" alt="Image">
						<a class="partner-overly" href="#">
							<img src="{{asset('assets/img/partner-logo/10.png')}}" alt="Image">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Partner Area -->

	<!-- Start Performance Area -->
	<section class="performance-area bg-none pb-70">
		<div class="container">
			<div class="section-title">
				<h2>We are professionals in</h2>
				<p>We provide our customers with the following high quality services with an excellent customer service and a quick turnaround.</p>
			</div>

			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="single-security">
						<i class="flaticon-website"></i>
						<h3>Computer Repairs</h3>
						<p>We refurbish and repair old computers,ensuring that their functionality is optimum  </p>

						<a href="#" class="read-more">
							Read More
						</a>
						<img src="{{asset('assets/img/shape/6.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-security">
						<i class="flaticon-profile"></i>
						<h3>Electronics Repairs</h3>
						<p>We save you the cost of constantly changing your gadgets while they can be made a new</p>

						<a href="#" class="read-more">
							Read More
						</a>
						<img src="{{asset('assets/img/shape/6.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-security">
						<i class="flaticon-cyber"></i>
						<h3>PC Upgrades</h3>
						<p>We offer different types of computer software and hardware upgrades, we ensure that your PC is always at its best</p>

						<a href="#" class="read-more">
							Read More
						</a>
						<img src="{{asset('assets/img/shape/6.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-security">
						<i class="flaticon-cyber"></i>
						<h3>Gadget Sales</h3>
						<p>We buy, rent and sell refurbished gadgets of different types. We get you covered by helping you save more</p>

						<a href="#" class="read-more">
							Read More
						</a>
						<img src="{{asset('assets/img/shape/6.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-security">
						<i class="flaticon-profile"></i>
						<h3>Data Recovery</h3>
						<p>We also recover data lost due to delets, crashes or virus attacks. Nothing can truly be lost</p>

						<a href="#" class="read-more">
							Read More
						</a>
						<img src="{{asset('assets/img/shape/6.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-security">
						<i class="flaticon-profile"></i>
						<h3>System Setup</h3>
						<p>We undertake complete system installation and setup. We make it easier for you and your organization </p>

						<a href="#" class="read-more">
							Read More
						</a>
						<img src="{{asset('assets/img/shape/6.png')}}" alt="Image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Performance Area -->

	<!-- Start Transform Area -->
	<section class="transform-area pb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pr-0">
					<div class="transform-img">
						<img src="{{asset('assets/img/transformTwo.jpg')}}" alt="Image">
					</div>
				</div>
				<div class="col-lg-6 pl-0">
					<div class="transform-content">
						<h2>Fast and Quality Services at a Click</h2>
						<p>Our vision is to grow and develop as #1 service center fortechnology users accross the country.
						 We intend to achieve this by converting all opportunities into sustainable business growth,
						  nurturing a culture of innovation, and providing better value to our partners and consumers
						   while also offering best-in-class services.</p>

						<div class="skill-bar" data-percentage="99%">
							<h4 class="progress-title-holder">
								<span class="progress-title">PC Repairs</span>
								<span class="progress-number-wrapper">
									<span class="progress-number-mark">
										<span class="percent"></span>
										<span class="down-arrow"></span>
									</span>
								</span>
							</h4>

							<div class="progress-content-outter">
								<div class="progress-content"></div>
							</div>
						</div>

						<div class="skill-bar" data-percentage="99%">
							<h4 class="progress-title-holder clearfix">
								<span class="progress-title">Gadgets Installation</span>
								<span class="progress-number-wrapper">
									<span class="progress-number-mark">
										<span class="percent"></span>
										<span class="down-arrow"></span>
									</span>
								</span>
							</h4>

							<div class="progress-content-outter">
								<div class="progress-content"></div>
							</div>
						</div>

						<div class="skill-bar mb-0" data-percentage="99%">
							<h4 class="progress-title-holder clearfix">
								<span class="progress-title">Refurbished Sales</span>
								<span class="progress-number-wrapper">
									<span class="progress-number-mark">
										<span class="percent"></span>
										<span class="down-arrow"></span>
									</span>
								</span>
							</h4>

							<div class="progress-content-outter">
								<div class="progress-content"></div>
							</div>
						</div>
						<div class="skill-bar mb-0" data-percentage="99%">
							<h4 class="progress-title-holder clearfix">
								<span class="progress-title">Rentals and Hire</span>
								<span class="progress-number-wrapper">
									<span class="progress-number-mark">
										<span class="percent"></span>
										<span class="down-arrow"></span>
									</span>
								</span>
							</h4>

							<div class="progress-content-outter">
								<div class="progress-content"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape-1">
			<img src="{{asset('assets/img/shape/3.png')}}" alt="Image">
		</div>
		<div class="shape-2">
			<img src="{{asset('assets/img/shape/4.png')}}" alt="Image">
		</div>
	</section>
	<!-- End Transform Area -->

	<!-- Start Pricing Area -->
	<section class="pricing-area">
		<div class="container">
			<div class="section-title">
				<h2>Buy Our Plans & Packages</h2>
				<p>Here are some of our business packages aimed at providing you with the best-in-class services at the minimum cost.</p>
			</div>

			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="single-pricing">
						<div class="pricing-content">
							<h3>One Time</h3>
							<h1>Free</h1>
						</div>

						<ul>
							<li>
								<i class="bx bx-check"></i>
								The Departure Of The Expect
							</li>
							<li>
								<i class="bx bx-check"></i>
								Remote Administrator
							</li>
							<li>
								<i class="bx bx-check"></i>
								Configure Software
							</li>
							<li>
								<span>
									<i class="bx bx-x"></i>
									Special Application
								</span>
							</li>
							<li>
								<span>
									<i class="bx bx-x"></i>
									24/7 Support
								</span>
							</li>
						</ul>

						<a href="#" class="default-btn">
							Order Now
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-pricing active">
						<div class="pricing-content">
							<h3>Business</h3>
							<h1>$70 <sub>/ per month</sub></h1>
						</div>

						<ul>
							<li>
								<i class="bx bx-check"></i>
								The Departure Of The Expect
							</li>
							<li>
								<i class="bx bx-check"></i>
								Remote Administrator
							</li>
							<li>
								<i class="bx bx-check"></i>
								Configure Software
							</li>
							<li>
								<i class="bx bx-check"></i>
								Special Application
							</li>
							<li>
								<span>
									<i class="bx bx-x"></i>
									24/7 Support
								</span>
							</li>
						</ul>

						<a href="#" class="default-btn">
							Order Now
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
					<div class="single-pricing">
						<div class="pricing-content">
							<h3>Exclusive</h3>
							<h1>$120 <sub>/ per month</sub></h1>
						</div>

						<ul>
							<li>
								<i class="bx bx-check"></i>
								The Departure Of The Expect
							</li>
							<li>
								<i class="bx bx-check"></i>
								Remote Administrator
							</li>
							<li>
								<i class="bx bx-check"></i>
								Configure Software
							</li>
							<li>
								<i class="bx bx-check"></i>
								Special Application
							</li>
							<li>
								<i class="bx bx-check"></i>
								24/7 Support
							</li>
						</ul>

						<a href="#" class="default-btn">
							Order Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing Area -->

	<!-- Start Choose Us Area -->
	<section class="choose-area-four ptb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="choose-img">
						<img src="{{asset('assets/img/choose.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="choose-wrap p-0">
						<h2>Why Choose Us</h2>
						<p>We provide innovative repair services for your computers, laptops, and other high-tech devices and gadgets. We alsp provide you with other quality technical solutions like sales, hire and installation servies all at a click </p>

						<ul class="mt-30">
							<li>
								<i class="bx bx-check"></i>
								Extemly low response time at all time
							</li>
							<li>
								<i class="bx bx-check"></i>
								We are always ready to serve you better
							</li>
							<li>
								<i class="bx bx-check"></i>
								We value your time and money
							</li>
						</ul>

						<a href="#" class="default-btn mt-30">
							Request Quote
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Choose Us Area -->

	<!-- Start Team Area -->
	<section class="team-area pt-100 pb-70">
		<div class="container">
			<div class="section-title">
				<h2>Our Expert Team</h2>
				<p>Meet our talented team of experts, whose duty is to constantly ensure that your requests are properly handled and that your gadgets are functional.</p>
			</div>

			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="single-team">
						<div class="image">
							<img src="{{asset('assets/img/team/1.jpg')}}" alt="image">

							<ul class="social">
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

						<div class="content">
							<h3>Peter Pers</h3>
							<span>Director</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-team">
						<div class="image">
							<img src="{{asset('assets/img/team/2.jpg')}}" alt="image">

							<ul class="social">
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

						<div class="content">
							<h3>Sarah Swift</h3>
							<span>Executive</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-team">
						<div class="image">
							<img src="{{asset('assets/img/team/3.jpg')}}" alt="image">

							<ul class="social">
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

						<div class="content">
							<h3>Alita Scot</h3>
							<span>Programmer</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-team">
						<div class="image">
							<img src="{{asset('assets/img/team/4.jpg')}}" alt="image">

							<ul class="social">
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

						<div class="content">
							<h3>Denial James</h3>
							<span>CEO</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Area -->

	<!-- Start Solutions Area -->
	<!-- <section class="project-area pb-100">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Genicks Recent Projects</h2>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti
					aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
			</div>

			<div class="row">
				<div class="solutions-wrap owl-carousel owl-theme">
					<div class="single-solutions solutions-time-bg-7">
						<div class="solutions-content">
							<h3>Restore Parotection Software</h3>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, obcaecati praesentium.
								Labore sint recusandae perspiciatis laudantium, deleniti non</p>
							<a href="#" class="read-more">
								Read More
							</a>
						</div>
					</div>

					<div class="single-solutions solutions-time-bg-8">
						<div class="solutions-content">
							<h3>Security Awarness Training</h3>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, obcaecati praesentium.
								Labore sint recusandae perspiciatis laudantium, deleniti non</p>
							<a href="#" class="read-more">
								Read More
							</a>
						</div>
					</div>

					<div class="single-solutions solutions-time-bg-9">
						<div class="solutions-content">
							<h3>Cyber Security CCTV Installation</h3>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, obcaecati praesentium.
								Labore sint recusandae perspiciatis laudantium, deleniti non</p>
							<a href="#" class="read-more">
								Read More
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Solutions Area -->

	<!-- Start Graph Area -->
	<section class="grph-area bg-color ptb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="grph-img">
						<img src="{{asset('assets/img/support-img.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="graph-content">
						<h2>24/7 Online Customer Support</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Quis ipsumv</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
							viverra maecenas accumsan lacus vel. </p>

						<h3>15 Ways To protect Your Bussiness From A Cyber Attack</h3>
						<a href="#" class="default-btn">
							Download
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Graph Area -->

	<!-- Start FAQ Area -->
	<section class="faq-area ptb-100">
		<div class="container">
			<div class="section-title">
				<h2>Frequently Asked Questions</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A facilis vel consequatur tempora atque
					blanditiis exercitationem incidunt, alias corporis quam assumenda dicta.</p>
			</div>

			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="faq-img-four">
						<img src="{{asset('assets/img/faq-img.png')}}" alt="Image">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="faq-accordion">
						<ul class="accordion">
							<li class="accordion-item">
								<a class="accordion-title active" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									What's The Difference Between IDS And IBS?
								</a>

								<div class="accordion-content show">
									<p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
										Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
										voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
										you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
										amet How do.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									How Is Encryption Different From Hacking
								</a>

								<div class="accordion-content">
									<p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
										Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
										voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
										you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
										amet How do.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									What Is Firewall And Why It Is Used?
								</a>

								<div class="accordion-content">
									<p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
										Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
										voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
										you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
										amet How do.</p>
								</div>
							</li>

							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)">
									<i class="bx bx-plus"></i>
									What Steps Will You Take To Secure server
								</a>

								<div class="accordion-content">
									<p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit.
										Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas
										voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do
										you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup
										amet How do.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End FAQ Area -->

	
@endsection