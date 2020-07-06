@extends('layouts.app')

@section('content')

	<!-- Start Page Title Area -->
	<div class="page-title-area bg-22">
		<div class="container">
			<div class="page-title-content">
				<h2>Quote Request</h2>
				<ul>
					<li>
						<a href="index.html">
							Home
						</a>
					</li>

					<li class="active">Get a Quote</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Contact Area -->
	<section class="faq-contact-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-wrap">
						<div class="contact-form">
							<div class="section-title">
								<span class="top-title">Request a Quote</span>
								<h2>Attracted by any of our products or services? </h2>
								<p>You can request for a quote and our sales rep will sure be in touch</p>
							</div>

							<form id="contactForm" method="POST">
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
												required data-error="Please enter the name of the product or service"
												placeholder="Product/Service Name">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30"
												rows="8" required data-error="Write your message here"
												placeholder="Describe what you would want to know about the above product/service"></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<button type="submit" class="default-btn page-btn">
											Request Quote
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