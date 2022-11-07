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
              <a class="" href="{{route('home')}}"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
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
        يوميات التواصل </h3>
        <ul>
          <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
          <li>-</li>
          <li>يوميات التواصل</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Event Start here -->
  <section class="event event-two padding-120">
    <div class="container">
      <div class="event-items">
        <div class="row">
   

  <!-- event End here -->
  {!! Toastr::message() !!}
  <section class="testimonial padding-120">
		<div class="container">
			<div class="section-header">
				<h3>رسائل</h3>
				
			</div>
			<div class="testimonial-items">
				<div class="testimonial-slider swiper-container">
					<div class="swiper-wrapper">
                    <?php
$x=Auth::user()->id;


$m = \App\Models\Message::with('parent')->where('parent_id','=',$x)->get();


?>
@if( $m->isEmpty())
<div class="section-header">
				<h2>  لا توجد رسائل  </h2>
				
			</div>

@else

@foreach ($m as $mm)
<?php
$aa=$mm->etat;
$x=Auth::user()->id;
$m = \App\Models\Message::with('parent')->where('parent_id','=',$x)->get();
?>
                       @if ( $aa == 'reçoit'   )
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
								<p>{{$mm->message}}</p>
								<h4>{{$mm->parent->name}} <span>الآباء </span></h4>
								
							</div>
							<div class="testimonial-image">
								<img src="{{$mm->parent->image}}" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
                        @else
                        <div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
								<p>{{$mm->message}}</p>
								<h4>{{$mm->enseignant->name}} <span>معلم </span>
                <img src="{{$mm->image}}" alt=" " class="img-fluid"  width="50px" height="50px"> </h4>
						
							</div>
							<div class="testimonial-image">
								<img src="{{$mm->enseignant->image}}" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
                        @endif
                        @endforeach
						<br>
                     
            
            
            
  
  </section><!-- event blog -->
 

<center>
            <div class="col-lg-8 col-md-6 col-xs-12">
            <form class="contact-form" action="{{route('btAjoutMessage')}}" method="post" >
            <input type="hidden" name="_token" value="{{ Session::token() }}">
              <input type="hidden" name="parent_id" value="{{$x}}" id="">
              @foreach ($m as $mm)
              <input type="hidden" name="enseignant_id" value="{{$mm->enseignant->id}}" id="">

              @endforeach
              <input type="hidden" name="etat" value="reçoit" id="">

            <textarea name="message" id="" cols="30" class="contact-input"  placeholder=" إجابتك"  rows="10" required></textarea>
<input type="submit" name="submit" value="إرسال " class="contact-button">
            </form>
            </div>
           
            

           
@endif
</center>
</div>
<br>
<br>

  <section class="achievements section-notch">
		<div class="overlay padding-120">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-student"></i>
							<span class="counter">5</span><span>.6M</span>
							<p>الأطفال سنويا</p>
						</div><!-- achievement item -->
					</div>
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-construction"></i>
							<span class="counter">102</span>
							<p>الدول</p>
						</div><!-- achievement item -->
					</div>
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-school-bus"></i>
							<span class="counter">300</span><span>+</span>
							<p>شركاء</p>
						</div><!-- achievement item -->
					</div>
					<div class="col-md-3 col-sm-3 col-12">
						<div class="achievement-item">
							<i class="icon flaticon-people"></i>
							<span class="counter">167.090</span>
							<p>مدرسين مدربين</p>
						</div><!-- achievement item -->
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- overlay -->
	</section><!-- achievements -->
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