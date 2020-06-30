@extends('layouts.app')

@section('content')

	<!-- Start 404 Error -->
	<div class="error-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="error-content-wrap">
					<img src="assets/img/404.jpg" alt="Image">
					<h3>Oops! Page Not Found</h3>
					<p>The page you were looking for could not be found.</p>
					<a href="index.html" class="default-btn page-btn">
						Return To Home Page
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End 404 Error -->
@endsection