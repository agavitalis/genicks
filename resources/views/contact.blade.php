@extends('layouts.app')

@section('content')

	<!-- Start Page Title Area -->
	<div class="page-title-area bg-22">
		<div class="container">
			<div class="page-title-content">
				<h2>Contact</h2>
				<ul>
					<li>
						<a href="index.html">
							Home
						</a>
					</li>

					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Contact Info Area -->
	<section class="contact-info-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 p-0">
					<div class="single-contact-info">
						<i class="bx bx-location-plus"></i>
						<h3>Norcross, GA 30092 USA</h3>
						<p>5501 Peachtree Corners CIR STE 200, OFC 271,Peachtree Corners, GA 30092</p>
						<a href="mailto:hello@cavort">Email: info@genicks.com</a>
						<a href="tel:+822456974">+822456974</a>
					</div>
				</div>

				<div class="col-lg-8 p-0">
					<div class="single-contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.5894622117016!2d-84.21921548544678!3d33.97739002911975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5a1a61ef962ad%3A0xa5c5874f8f93754!2s5501%20Peachtree%20Corners%20Cir%20STE%20200%2C%20OFC%20271%2C%20Norcross%2C%20GA%2030092%2C%20USA!5e0!3m2!1sen!2sng!4v1593987644347!5m2!1sen!2sng" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					
					</div>
				</div>

				<!-- <div class="col-lg-3 p-0">
					<div class="single-contact-info">
						<i class="bx bx-location-plus"></i>
						<h3>California</h3>
						<p>658 Lane Drive st Riverside. California</p>
						<a href="mailto:hello@cavort">Email: hello@genicks.com</a>
						<a href="tel:+892-569-756">+892-569-756</a>
					</div>
				</div>

				<div class="col-lg-3 p-0">
					<div class="single-contact-map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509156.5834578!2d-123.79616103953882!3d37.1931243309143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sbd!4v1591218371520!5m2!1sen!2sbd"
							style="border:0;"></iframe>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- End Contact Info Area -->

	<!-- Start Contact Area -->
	<section class="faq-contact-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-wrap">
						<div class="contact-form">
							<div class="section-title">
								<span class="top-title">Contact Us</span>
								<h2>Drop us a message for any query</h2>
								<p>Our Sales and Support are 24/7 ready to listen and attend to your quries, complains clearifications, kindly shoot us an email now.</p>
							</div>

							<form id="contactForm">
								@csrf
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" required
												data-error="Please enter your name" placeholder="Your Name">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required
												data-error="Please enter your email" placeholder="Your Email">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="phone_number" id="phone_number" required
												data-error="Please enter your number" class="form-control"
												placeholder="Your Phone">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<input type="text" name="msg_subject" id="msg_subject" class="form-control"
												required data-error="Please enter your subject"
												placeholder="Your Subject">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30"
												rows="8" required data-error="Write your message"
												placeholder="Your Message"></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<button type="submit" class="default-btn page-btn">
											Send Message
										</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->

@endsection	