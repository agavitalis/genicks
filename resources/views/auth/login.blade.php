@extends('layouts.app')

@section('content')
	<!-- Start Page Title Area -->
    <div class="page-title-area bg-8">
			<div class="container">
				<div class="page-title-content">
					<h2>Log In</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>
		
						<li>User</li>
						<li class="active">Log In</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Log In Area -->
		<section class="user-area-all-style log-in-area ptb-100">
			<div class="container">
				<div class="section-title">
					<h2>Log In to your account!</h2>
					<p>You need to have been granted access by the admins, to be able to access this section</p>
				</div>
				<div class="contact-form-action">
                    <form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="row">
							<!-- <div class="col-lg-4 col-md-4 col-sm-12">
								<button class="default-btn" type="submit">
									Google
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12">
								<button class="default-btn" type="submit">
									Facebook
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12">
								<button class="default-btn" type="submit">
									Twitter
								</button>
							</div> -->

							<div class="col-12">
								<div class="form-group">
								    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
							</div>

							<div class="col-12">
								<div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                </div>
							</div>

							<div class="col-lg-6 col-sm-6 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="chb1">
									<label for="chb1">
										Remember Me
									</label>
								</div>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="col-lg-6 col-sm-6">
                                    <a class="forget" href="{{ route('password.request') }}">Forgot my password?</a>
                                </div>
                            @endif

							<div class="col-12">
								<button class="default-btn btn-two" type="submit">
									Log In Now
								</button>
							</div>

							<div class="col-12">
								<p class="account-desc">
									Not a member?
									<a href="{{ route('register') }}">Register</a>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Log In Area -->
@endsection
