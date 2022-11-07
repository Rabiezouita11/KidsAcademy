<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>KidsAcademy</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
		<script src="{{ asset('vendor/kustomer/js/kustomer.js') }}" defer></script>
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font-awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Flaticon -->
	<link href="assets/flaticon/flaticon.css" rel="stylesheet">

	<!-- lightcase -->
	<link href="assets/css/lightcase.css" rel="stylesheet">

	<!-- Swiper -->
	<link href="assets/css/swiper.min.css" rel="stylesheet">

	<!-- quick-view -->
	<link href="assets/css/quick-view.css" rel="stylesheet">

	<!-- nstSlider -->
	<link href="assets/css/jquery.nstSlider.css" rel="stylesheet">

	<!-- flexslider -->
	<link href="assets/css/flexslider.css" rel="stylesheet">

	<!-- Style -->
	<link href="assets/css/rtl.css" rel="stylesheet">

	<!-- Style -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Responsive -->
	<link href="assets/css/responsive.css" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body id="scroll-top">

	<!-- Preloader start here -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- Preloader end here -->


	<!-- mobile menu start here -->
	<div class="mobile-menu-area">
		<div class="logo-area">
			<a class="logo" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
			<button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="mobile-menu">
			<ul class="m-menu">
				
				
				
			<li><a href="{{route('home')}}"> الصفحة الرئيسية</a></li>
				<li><a href="{{route('contact')}}">اتصل بنا</a></li>
				@guest

<li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
@if (Route::has('register'))
<li><a href="{{ route('register') }}">تسجيل</a></li>
@endif
@else
<li class="dropdown">
    <?php

$x= Auth::user()->image  ;

?>

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
        aria-haspopup="true" aria-expanded="false">   {{ Auth::user()->name }} <span class="caret"></span> <img src="{{$x}}" alt=" " class="rounded-circle img-thumbnail avatar-lg" rel="apple-touch-icon"  width="50px" height="50px"></a>
    <ul class="dropdown-menu">
        <li class="active"><a href="{{ route('logout') }}">تسجيل خروج</a></li>
        <li class="active"><a href="{{ route('profile') }}">الحساب</a></li>
        

                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li>


@endguest
			</ul>
		</div>
	</div>
	<!-- mobile menu ending here -->


	<header>
		<div class="header-top">
			<div class="container">
				<div class="ht-area">
					<ul class="left">
						<center>
						<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> وقت مفتوح : 8:00 - 17:00						</li>
						</center>
					</ul>
					
				</div>
			</div>
		</div>

		<div class="main-menu">
			<div class="container">
				<div class="row no-gutters">
					<nav class="main-menu-area w-100">
						<div class="logo-area">
							<a class="" href="index.html"><img src="images/logo.png" alt="logo"
									class="img-responsive"></a>
							<button type="button" class="navbar-toggle collapsed d-md-none" data-toggle="collapse"
								data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="menu-area">
						

							<ul class="menu">
								<li class="dropdown">

									<ul class="dropdown-menu">
										<li class="active"><a href="index.html">Home Style 01</a></li>
										<li><a href="index-2.html">Home Style 02</a></li>
										<li><a href="index-3.html">Home Style 03</a></li>
										<li><a href="one-page.html">One Page</a></li>
										<li><a href="boxed-layout.html">Boxed Layout</a></li>

										<li><a href="#">Test Multi Step</a>
											<ul class="dropdown-menu">
												<li><a href="#">Menu 2</a></li>
												<li><a href="#">Menu 2</a></li>
												<li><a href="#">Menu 2</a></li>
												<li><a href="#">Menu 2</a>
													<ul class="dropdown-menu">
														<li><a href="#">Menu 3</a></li>
														<li><a href="#">Menu 3</a></li>
														<li><a href="#">Menu 3</a></li>
														<li><a href="#">Menu 3</a>
															<ul class="dropdown-menu">
																<li><a href="#">Menu 4</a></li>
																<li><a href="#">Menu 4</a></li>
																<li><a href="#">Menu 4</a></li>
																<li><a href="#">Menu 4</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							
							
							
							
						
								<li><a href="{{route('home')}}"> الصفحة الرئيسية</a></li>
				<li><a href="{{route('contact')}}">اتصل بنا</a></li>
				@guest

<li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
@if (Route::has('register'))
<li><a href="{{ route('register') }}">تسجيل</a></li>
@endif
@else
<li class="dropdown">
    <?php

$x= Auth::user()->image  ;

?>

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
        aria-haspopup="true" aria-expanded="false">   {{ Auth::user()->name }} <span class="caret"></span> <img src="{{$x}}" alt=" " class="rounded-circle img-thumbnail avatar-lg" rel="apple-touch-icon"  width="50px" height="50px"></a>
    <ul class="dropdown-menu">
        <li class="active"><a href="{{ route('logout') }}">تسجيل خروج</a></li>
        <li class="active"><a href="{{ route('profile') }}">الحساب</a></li>
        

                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li>


@endguest
							</ul>
							<form class="menu-search-form">
								<input type="text" name="search" placeholder="Search here...">
								<span class="menu-search-close"><i class="fa fa-times" aria-hidden="true"></i></span>
							</form>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- header End here -->


	<!-- Banner Start here -->
	<section class="banner section-notch">
		<div class="banner-slider swiper-container">
			<div class="swiper-wrapper">
				<div class="banner-item slide-one swiper-slide">
					<div class="banner-overlay"></div>
					<div class="container">
						<div class="banner-content">
							<h3>
Bienvenue à Kids Academy</h3>
							<h2>
Gardons le contact</h2>
							<p></p>
							<ul>
								
							</ul>
						</div><!-- banner-content -->
					</div><!-- container -->
				</div><!-- slide item -->
				<div class="banner-item slide-two swiper-slide">
					<div class="banner-overlay"></div>
					<div class="container">
						<div class="banner-content">
						<h3>
</h3>
							<h2></h2>
							<p></p>
							<ul>
								
							</ul>
						</div><!-- banner-content -->
					</div><!-- container -->
				</div><!-- slide item -->
				<div class="banner-item slide-three swiper-slide">
					<div class="banner-overlay"></div>
					<div class="container">
						<div class="banner-content">
						<h3>
</h3>
							<h2></h2>
							<p></p>
							<ul>
								
							</ul>
						</div><!-- banner-content -->
					</div><!-- container -->
				</div><!-- slide item -->

			</div><!-- swiper-wrapper -->
			<div class="swiper-pagination"></div>
		</div><!-- swiper-container -->
	</section><!-- banner -->
	<!-- Banner End here -->

	
	<!-- facility Start here -->
	@guest

	<center>	<h1 style="color:red;"> لمواصلة مساحتك الرجاء  <a href="{{route('login')}}"> تسجيل الدخول</a>  </h1>
	<i style="font-size: 200px;" class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span></center>
	
@else
@include('kustomer::kustomer')
@widget('formation')
@endguest
	<!-- About Start here -->
	<section class="about section-notch">
		<div class="overlay padding-120">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-image">
							<img src="images/about/about.png" alt="about image" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content">
							<h3>حول KidsAcademy</h3>
							<p style="font-size:20px;">عبارة عن برنامج يخدم مجال التعليم  بحيث يبقي أولياء الأمور
 على اتصال دائم مع مدرسة أبنائهم و حصولهم على الإخبار في وقتها و تشمل الخدمة جميع نواحي التعليم من ناحية  الغياب 
 و إبلاغهم عن موعد اجتماع أولياء الأمور و العطل الرسميةو الرحلات و جميع ما يتعلق بأمور المدرسة اظافة الى تنظيم عملية التواصل مع الكشافة التونسية و عملية التسجيل في النوادي المدرسية (نادي أفلاطون).</p>
							<ul>
							
							</ul>
						</div><!-- about content -->
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- overlay -->
	</section><!-- about -->
	<!-- About End here -->


	<!-- Classes Start here -->
	
	<!-- Classes End here -->

<br>
<br>
	<!-- Teachers Start here -->
	<section class="teachers section-notch">
		<div class="overlay padding-120">
			<div class="container">
				<div class="section-header bg">
					<h3>قابل معلمينا</h3>
					
				</div>
				<div class="row">
					<div class="col-lg-6 col-xs-12">
						<div class="teacher-item">
							<div class="teacher-image">
								<img src="images/teachers/teacher-bg.jpg" alt="teacher image" class="img-responsive">
							</div>
							<div class="teacher-content">
								<h4>تقوى تليلي <span>أستاذة تربية و تعليم</span></h4>
								<ul>
									<li><a href="https://www.facebook.com/ameni.bouhrira.7"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									
								</ul>
								<p><a href="mailto:takwatlili2019@gmail.com">takwatlili2019@gmail.com</a>  </p>
							
							</div>
						</div><!-- teacher item -->
					</div>
					<div class="col-lg-6 col-xs-12">
						<div class="teacher-item">
							<div class="teacher-image">
								<img src="images/teachers/teacher_02.jpg" alt="teacher image" class="img-responsive">
							</div>
							<div class="teacher-content">
								<h4>خلود سلاطنية <span>أستاذة تربية و تعليم</span></h4>
								<ul>
									<li><a href="https://www.facebook.com/khouloud.slatnia"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									
								</ul>
								<p><a href="mailto:khouloudslatnia20@gmail.com">khouloudslatnia20@gmail.com</a>  </p>
							
							</div>
						</div><!-- teacher item -->
					</div>
					
					</div>
					
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- overlay -->
	</section><!-- teacher -->
	<!-- Teachers End here -->


	<!-- Gallery Start here -->

	<!-- Gallery End here -->

<br>
<br>
	<!-- Achievements Start here -->
	@widget('Total')
	<!-- Achievements End here -->

<br>
<br>
	<!-- Testimonial Start here -->
	<section class="testimonial padding-120">
		<div class="container">
			<div class="section-header">
				<h3>ماذا يقول الآباء
</h3>
				<p></p>
			</div>
			<div class="testimonial-items">
				<div class="testimonial-slider swiper-container">
					<div class="swiper-wrapper">
					<?php



$m = \App\Models\Feedback::all();
$t = \App\Models\User::all();
?>
        
		@foreach ($m as $r)
@foreach ($t as $a)
<?php
 
$i= $a->id;

 
?>
 @if ($r->user_info == $i)
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
								<p>  {{$r->type}} : </p>
							
								<p>   {{$r->message}}</p>
								<h4>   {{$a->name}} <span>Parent</span></h4>
								<img src="images/testimonial/testimonial_icon_01.jpg" alt="testimonial icon"
									class="img-responsive">
							</div>
							<div class="testimonial-image">
								<img src="{{$a->image}}" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
						@endif
              @endforeach
              @endforeach
						
					
						

					</div><!-- swiper-wrapper -->
				</div><!-- swiper-container -->
			</div><!-- testimonial-items -->
		</div><!-- container -->
	</section><!-- testimonial -->
	<!-- Testimonial End here -->


	<!-- Partner Start here -->
	
	<!-- event End here -->


	<!-- Subscribe Start here -->
	
	<!-- Subscribe End here -->


	<!-- Footer Start here -->
	
	
	<a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<!-- Footer End here -->


	<!-- jquery -->
	<script src="assets/js/jquery-1.12.4.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Isotope -->
	<script src="assets/js/isotope.min.js"></script>

	<!-- lightcase -->
	<script src="assets/js/lightcase.js"></script>

	<!-- counterup -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>

	<!-- Swiper -->
	<script src="assets/js/swiper.jquery.min.js"></script>

	<!--progress-->
	<script src="assets/js/circle-progress.min.js"></script>

	<!--velocity-->
	<script src="assets/js/velocity.min.js"></script>

	<!--quick-view-->
	<script src="assets/js/quick-view.js"></script>

	<!--nstSlider-->
	<script src="assets/js/jquery.nstSlider.js"></script>

	<!--flexslider-->
	<script src="assets/js/flexslider-min.js"></script>

	<!--easing-->
	<script src="assets/js/jquery.easing.min.js"></script>

	<!--coundown-->
	<script src="assets/js/coundown.js"></script>

	<!-- custom -->
	<script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>