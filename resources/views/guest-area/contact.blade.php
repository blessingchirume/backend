@extends('layouts.guest')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('lawncare/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h1 class="mb-3 bread">Contact us</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="row mb-5">
						<div class="col-md-4">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="text">
									<p><span>Address: </span>4 Brunswick Lane Mt Pleasant, Harare Zimbabwe</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-phone"></span>
								</div>
								<div class="text">
									<p><span>Phone:</span> <a href="tel://+44 7749 935369">+44 7749 935369</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-paper-plane"></span>
								</div>
								<div class="text">
									<p><span>Email:</span> <a href="mailto:info@witevatrading.co.zw">info@witevatrading.co.zw</a></p>
								</div>
							</div>
						</div>

					</div>
					<div class="row no-gutters">
						<div class="col-md-8">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4">Contact Us</h3>
								<div id="form-message-warning" class="mb-4"></div>
								<div id="form-message-success" class="mb-4">
									Your message was sent, thank you!
								</div>
								<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Full Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="email">Email Address</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="subject">Subject</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Send Message" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-4 d-flex align-items-stretch">
							<div class="mapouter">
								<div class="gmap_canvas"><iframe width="325" height="634" id="gmap_canvas" src="https://maps.google.com/maps?q=4%20Brunswick%20Lane%20Mt%20Pleasant,%20Harare,%20Zimbabwe&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br>
									<style>
										.mapouter {
											position: relative;
											text-align: right;
											height: 634px;
											width: 325px;
										}
									</style><a href="https://www.embedgooglemap.net"></a>
									<style>
										.gmap_canvas {
											overflow: hidden;
											background: none !important;
											height: 634px;
											width: 325px;
										}
									</style>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
@endsection