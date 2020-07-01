@extends('layouts.app')

@section('content')
	<!-- Start Page Title Area -->
	<div class="page-title-area bg-17">
		<div class="container">
			<div class="page-title-content">
				<h2>Services</h2>
				<ul>
					<li>
						<a href="index.html">
							Home
						</a>
					</li>

					<li class="active">Services</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	<!-- Start Features Area -->
	<section class="features-area-page pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="single-features">
						<h3><i class="bx bx-check-shield"></i> Repairs</h3>
						<p>We undertake repairs of different types of electonic gadgets ranging from PCs, Phones, Servers, Routers and Switches.</p>
						<span class="bx bx-check-shield"></span>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-features">
						<h3><i class="bx bx-lock"></i> Installation</h3>
						<p>We install and setup solutions and gadgets for private individuals, firms, offices, schools and enterprices.</p>
						<span class="bx bx-lock"></span>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
					<div class="single-features">
						<h3><i class="bx bx-certification"></i> Sales and Rentals</h3>
						<p>We also buy, rent and sales quality refurbished IT gadgets, all at an affordable price</p>
						<span class="bx bx-certification"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Security Area -->

	<!-- Start Performance Area -->
	<section class="performance-area bg-none pb-100">
		<div class="container">
			<div class="section-title">
				<h2>High-Performance Solutions</h2>
				<p>We also provide our esteemed customers with the following list of executive services, all at an affordable prices .</p>
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
				<!-- <div class="col-lg-12">
					<div class="page-navigation-area">
						<nav aria-label="Page navigation example text-center">
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link page-links" href="#">
										<i class="bx bx-chevrons-left"></i>
									</a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="#">1</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">
										<i class="bx bx-chevrons-right"></i>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- End Performance Area -->

@endsection