<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('public/assets/img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Magazine</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<link rel="stylesheet" href="{{asset('public/assets/css/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
	</head>
	<body>
    <!-- Header Area Start -->
		<header>
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
							<ul>
								<li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
								<li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>support@colorlib.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="index.html">
								<img class="img-fluid" src="{{asset('public/assets/img/logo.png')}}" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<img class="img-fluid" src="{{asset('public/assets/img/banner-ad.jpg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/')}}">Archive</a></li>
							<li><a href="{{url('/Category')}}">Category</a></li>
							<li class="menu-has-children"><a href="{{url('/')}}">Post Types</a>
							<ul>
								<li><a href="standard-post.html">Standard Post</a></li>
								<li><a href="image-post.html">Image Post</a></li>
								<li><a href="gallery-post.html">Gallery Post</a></li>
								<li><a href="video-post.html">Video Post</a></li>
								<li><a href="audio-post.html">Audio Post</a></li>
							</ul>
						</li>
						<li><a href="{{url('/About-us')}}">About</a></li>
						<li><a href="{{url('/Contact-us')}}">Contact</a></li>
					</ul>
					</nav><!-- #nav-menu-container -->
					<div class="navbar-right">
						<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>
    <!-- Header Area End -->
		<div class="site-main-container">
			<!-- Start top-post Area -->
			@yield('topArea')
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->

						<!-- Main Content Area -->
              @yield('content')
            <!-- Main Content Area -->
						@yield('sideBarArea')
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>

		<!-- start footer Area -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Top Products</h4>
						<ul>
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Features</h4>
						<ul>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-md-6 single-footer-widget">
						<h4>Resources</h4>
						<ul>
							<li><a href="#">Guides</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Experts</a></li>
							<li><a href="#">Agencies</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 single-footer-widget">
						<h4>Instragram Feed</h4>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="{{asset('public/assets/img/i1.jpg')}}" alt=""></li>
							<li><img src="{{asset('public/assets/img/i2.jpg')}}" alt=""></li>
							<li><img src="{{asset('public/assets/img/i3.jpg')}}" alt=""></li>
							<li><img src="{{asset('public/assets/img/i4.jpg')}}" alt=""></li>
							<li><img src="{{asset('public/assets/img/i5.jpg')}}" alt=""></li>
							<li><img src="{{asset('public/assets/img/i6.jpg')}}" alt=""></li>
							<li><img src="{{asset('public/assets/img/i7.jpg')}}" alt=""></li>
							<li><img src="{{asset('public/assets/img/i8.jpg')}}" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="footer-bottom row align-items-center">
					<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="col-lg-4 col-md-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->
		<script src="{{asset('public/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{asset('public/assets/js/vendor/bootstrap.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="{{asset('public/assets/js/easing.min.js')}}"></script>
		<script src="{{asset('public/assets/js/hoverIntent.js')}}"></script>
		<script src="{{asset('public/assets/js/superfish.min.js')}}"></script>
		<script src="{{asset('public/assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('public/assets/js/mn-accordion.js')}}"></script>
		<script src="{{asset('public/assets/js/jquery-ui.js')}}"></script>
		<script src="{{asset('public/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('public/assets/js/mail-script.js')}}"></script>
		<script src="{{asset('public/assets/js/main.js')}}"></script>
	</body>
</html>
