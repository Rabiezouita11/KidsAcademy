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



  <!-- header start here -->
  <header>
    <div class="header-top">
      <div class="container">
        <div class="ht-area">
          <ul class="left">
            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone : 8801 234 567 890</li>
            <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Opening Time : 9:30am-5:30pm</li>
            <li><span><i class="fa fa-home" aria-hidden="true"></i></span> Address : Labartisan 1205 Newyork</li>
          </ul>

        </div>
      </div>
    </div>
    <div class="main-menu">
			<div class="container">
				<div class="row no-gutters">
					<nav class="main-menu-area w-100">
						<div class="logo-area">
							<a class="" href="{{route('home')}}"><img src="images/logo.png" alt="logo"
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


  <!-- Page Header Start here -->
  <section class="page-header section-notch">
    <div class="overlay">
      <div class="container">
        <h3>معلومات الاتصال الخاصة بنا</h3>
        <ul>
          <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
          <li>-</li>
          <li>اتصل بنا</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Contact Start here -->
  <section class="contact contact-page">
    <div class="contact-details padding-120">
      <div class="container">
      @if (session('azer'))
            <div class="alert alert-success">
            {{session('azer')}}

            </div>
            @endif
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <ul>
              <li class="contact-item">
                <span class="icon flaticon-signs"></span>
                <div class="content">
                  <h4>موقعنا</h4>
                  <p>جندوبة</p>
                </div>
              </li>
              
             
            </ul>
          </div>
       
          <div class="col-lg-8 col-md-6 col-xs-12">
            <form class="contact-form" action="{{route('AjoutContact')}}" method="post">
            @csrf
            <input type="hidden"   placeholder="votre nom" class="contact-input">
           
            <input type="text" value="{{ old('nom') }}" name="nom" placeholder="اسمك" class="contact-input">
            <div>@if ($errors->has('nom'))
                                <strong style="color: red;">{{ $errors->first('nom') }}</strong>
                                @endif</div>
            <input type="email" value="{{ old('email') }}"  name="email" placeholder="بريدك الإلكتروني" class="contact-input">
            <div>@if ($errors->has('email'))
                                <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                @endif</div>  
            <textarea rows="5" value="{{ old('message') }}" placeholder="اكتب رسالتك"  name="message" class="contact-input"></textarea>
            <div>@if ($errors->has('message'))
                            <strong style="color: red;">{{ $errors->first('message') }}</strong>
                            @endif</div>
            <input type="submit" name="submit" value="أرسل الرسالة" class="contact-button">
            </form>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- contact-details -->

 =
<div class="map-container">
	<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0"
          marginwidth="0" src="https://maps.google.com/maps?q=Institut+Supérieur+Des+Sciences+Humaines+De+Jendouba , 
         India, &t=&z=14&ie=UTF8&iwloc=&output=embed"></iframe>
</div>
    
  </section>
  <!-- Contact End here -->


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

  <!-- Google Map -->
  <script type="text/javascript"
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg"></script>

  <!-- custom -->
  <script src="assets/js/custom.js"></script>

  <script type="text/javascript">
    //Home Page map
    var styleArray = [
      {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#65ac4c"
          }
        ]
      }
    ];

    var mapOptions = {
      center: new google.maps.LatLng(23.7393282, 90.3889611),
      zoom: 15,
      styles: styleArray,
      scrollwheel: false,
      backgroundColor: 'transparent',
      mapTypeControl: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),
      mapOptions);
    var myLatlng = new google.maps.LatLng(23.7393282, 90.3889611);
    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: 'images/map-icon.png'
    });
  </script>


</body>

</html>