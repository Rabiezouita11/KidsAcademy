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
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/tt.js') }}" defer></script>
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
			<a class="logo" href="{{route('home')}}"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
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
           
          <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> وقت مفتوح : 8:00 - 17:00	</li>
          
          </ul>
          
        </div>
      </div>
    </div>

    <div class="main-menu">
      <div class="container">
        <div class="row no-gutters">
          <nav class="main-menu-area w-100">
            <div class="logo-area">
              <a class="" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
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
        <h3>
        الكشافة التونسية </h3>
        <ul>
          <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
          <li>-</li>
          <li> الكشافة التونسية</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Event Start here -->

   

  <!-- event End here -->
  {!! Toastr::message() !!}
  <section class="product-details padding-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-xs-12">
          <div class="pro-details">
            <div class="row">
              <div class="col-md-6">
                <div class="product-slider">
                  <!-- Place somewhere in the <body id="scroll-top"> of your page -->
                  <div id="slider" class="flexslider">
                    <ul class="slides">
                      <li><img src="images/product/slider_bg_01.jpg" alt="porduct image" class="img-responsive" /></li>
                      <li><img src="images/product/slider_bg_02.jpg" alt="porduct image" class="img-responsive" /></li>
                      <li><img src="images/product/slider_bg_03.png" alt="porduct image" class="img-responsive" /></li>
                      <li><img src="images/product/slider_bg_04.jpg" alt="porduct image" class="img-responsive" /></li>
                      <li><img src="images/product/slider_bg_05.jpg" alt="porduct image" class="img-responsive" /></li>
                      <li><img src="images/product/slider_bg_06.jpg" alt="porduct image" class="img-responsive" /></li>
                    </ul>
                  </div>
                  <div id="carousel" class="flexslider">
                    <ul class="slides">
                      <li><img src="images/product/slider_bg_01.jpg" alt="porduct image" class="img-responsive" />
                        <span></span>
                      </li>
                      <li><img src="images/product/slider_bg_02.jpg" alt="porduct image" class="img-responsive" />
                        <span></span>
                      </li>
                      <li><img src="images/product/slider_bg_03.png" alt="porduct image" class="img-responsive" />
                        <span></span>
                      </li>
                      <li><img src="images/product/slider_bg_04.jpg" alt="porduct image" class="img-responsive" />
                        <span></span>
                      </li>
                      <li><img src="images/product/slider_bg_05.jpg" alt="porduct image" class="img-responsive" />
                        <span></span>
                      </li>
                      <li><img src="images/product/slider_bg_06.jpg" alt="porduct image" class="img-responsive" />
                        <span></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="details">
                    <br>
                    <br>
                    <br>
                  <h3>الكشافة التونسية</h3>
                 
                  <p style="font-size 40px;">هي حركة شبابية تربوية تطوعية غير سياسية عالمية، هدفها تنمية الشباب بدنيًا وثقافيًا. أسسها ووضع قواعدها اللورد بادن باول عام 1907</p>

                
                </div>
              </div>
            </div>
          </div><!-- pro details -->
          <div class="pro-description">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sescription" aria-controls="sescription" role="tab"
                  data-bs-toggle="tab" data-bs-target="#sescription">فوج الرياض سليمان ولاية نابل</a></li>
              <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab"
                  data-bs-target="#reviews">فوج عين دراهم جندوبة
                  </a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sescription">
              <li class="contact-item">
                <span class="icon flaticon-message"></span>
                <div class="content">
                  <h4>عنوان بريد الكتروني</h4>
                  <p>scoutriadhslimene@yahoo.com </p>
                </div>
              </li>
              <br>

              <li class="contact-item">
                <span class="icon flaticon-smartphone"></span>
                <div class="content">
                  <h4>رقم الهاتف</h4>
                  <p>+21654162557</p>
                </div>
              </li>
              </div>
              
              <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="pro-reviews">
             
                  
              <li class="contact-item">
                <span class="icon flaticon-smartphone"></span>
                <div class="content">
                  <h4>رقم الهاتف</h4>
                  <p>+21698514023</p>
                </div>
              </li>
                </div><!-- pro reviews -->
                
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <div class="product-sidebar">
            <div class="por-sidebar-item">
             
            </div>
           
            </div><!-- por-sidebar-item -->
            
          </div><!-- product-sidebar -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section>
 
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

</body>

</html>