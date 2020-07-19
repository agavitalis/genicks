@extends('layouts.app')

@section('content')
	<!-- Start Page Title Area -->
    <div class="page-title-area bg-9">
			<div class="container">
				<div class="page-title-content">
					<h2>Sign In</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>
						
						<li>User</li>
						<li class="active">Sign In</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Sign Up Area -->
		<section class="user-area-all-style sign-up-area ptb-100">
			<div class="container">
				<div class="section-title">
					<h2>Create an account!</h2>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium quas cumque iste veniam id dolorem deserunt ratione error voluptas rem ullam possimus placeat, ut, odio</p>
				</div>
				
				<div class="contact-form-action">
					<form method="POST" action="{{ route('register') }}">
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

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
                                    <input id="first_name" placeholder="First Name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="col-md-12 col-sm-12 ">
								<div class="form-group">
                                    <input id="last_name" placeholder="Last Name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
                                    <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
            					</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="col-md-12 col-sm-12 ">
								<div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-12 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="chb1">
									<label for="chb1">
										I agree with Genicks 
										<a href="privacy-policy.html">Privacy Policy</a>
									</label>
								</div>

								<div class="agree-label">
									<input type="checkbox" id="chb2">
									<label for="chb2">
										I agree with Genicks 
										<a href="terms-conditions.html">Terms & Conditions</a>
									</label>
								</div>
							</div>

							<div class="col-12">
								<button class="default-btn btn-two" type="submit">
									Register Account
								</button>
							</div>
							
							<div class="col-12">
								<p class="account-desc">
									Already have an account?
									<a href="log-in.html"> Log In</a>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Sign Up Area -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
