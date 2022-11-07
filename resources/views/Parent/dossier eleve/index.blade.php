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
        سجل التلميذ </h3>
        <ul>
          <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
          <li>-</li>
          <li> سجل التلميذ</li>
        </ul>
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- page header -->
  <!-- Page Header End here -->


  <!-- Event Start here -->
 

  <!-- event End here -->
  {!! Toastr::message() !!}
  <section class="testimonial padding-120">
		<div class="container">
			<div class="section-header">
				<h3>سجل التلميذ</h3>
				
			</div>
		<center>
            <div class="col-lg-8 col-md-6 col-xs-12">
            <form class="contact-form" action="" method="post" >
            <input type="hidden" name="_token" value="{{ Session::token() }}">
              <input type="hidden" name="nom_parent" value="" id="">
              <input type="hidden" name="reponse" value="يتم معالجة ردك" id="">
            
            
              <label for="" > اسم الكامل  </label>
            <input type="text" name="s1" placeholder=" هل سمعت عن هذا البرنامج سابقا " value="  {{ Auth::user()->name }}" class="contact-input" readonly>
              <br>
              <br>

            <input type="hidden"  placeholder=" هل سمعت عن هذا البرنامج سابقا "   class="contact-input" required>
           
          
            <label for=""> بريد الالكتروني</label>
              <input type="text" name="s2" placeholder="هل ترى أية موهبة عند طفلك "  value="  {{ Auth::user()->email }}"  class="contact-input" readonly>
             <br>
             <br>
             <label for=""> صف دراسي</label>
              <input type="text" name="s3" placeholder="ما الذي تنتظره من هذا البرنامج " value=" {{ Auth::user()->classe }}"  class="contact-input" readonly>
             <br>
             <br>
             <label for=""> تاريخ الميلاد</label>
             <input type="text" name="s4" placeholder="هل لدى طفلك مشاكل نفسية" value=" {{ Auth::user()->date_de_naissance }}"  class="contact-input" readonly>
             <br>
             <br>
             <label for=""> مكان الولادة</label>
             <input type="text" name="s4" placeholder="هل لدى طفلك مشاكل نفسية" value="   {{ Auth::user()->lieu_de_naissance }}"  class="contact-input" readonly>
             <br>
             <br>
             <label for=""> الهاتف الرئيسي</label>
             <input type="text" name="s4" placeholder="هل لدى طفلك مشاكل نفسية" value="   {{ Auth::user()->telephone_principale }}"  class="contact-input" readonly>
             <br>
             <br>
             <label for="">الهاتف الثانوي </label>
             <input type="text" name="s4" placeholder="هل لدى طفلك مشاكل نفسية" value="  {{ Auth::user()->telephone_secondaire }}"  class="contact-input" readonly>
             <br>
             <br>
            </form>
<?php
$zz=Auth::user()->classe;

?>

            @if ( $zz == 'السنة الأولى إبتدائي'  )
            <?php
$x=Auth::user()->id;
$aa='semstre 1';
$bb='semstre 2';
$cc='semstre 3';
$y = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yy = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yyy = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();

$z = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zz = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zzz = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();

$u = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uu = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uuu = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();

$i = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get(); 
$p = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get(); 
?>


@foreach ( $y as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">الخط </th>
      <td >{{$t->الخط}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $yy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>




@foreach ( $yyy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الأول</th>
      <td>{{$t->m1}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach

<!-- // -->



@foreach ( $z as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">الخط </th>
      <td >{{$t->الخط}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $zz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $zzz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  <table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثاني</th>
      <td>{{$t->m2}}</td>
    </tr>
   
  </tbody>
</table>

@endforeach

<!-- // -->



@foreach ( $u as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">الخط </th>
      <td >{{$t->الخط}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $uu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $uuu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  <table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثالث</th>
      <td>{{$t->m3}}</td>
    </tr>
   
  </tbody>
</table>

@endforeach

@elseif  ($zz == 'السنة الثانية إبتدائي')


<?php
$x=Auth::user()->id;
$aa='semstre 1';
$bb='semstre 2';
$cc='semstre 3';
$y = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yy = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yyy = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();

$z = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zz = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zzz = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();

$u = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uu = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uuu = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();

$i = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get(); 
$p = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get(); 
?>


@foreach ( $y as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">الخط </th>
      <td >{{$t->الخط}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $yy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>




@foreach ( $yyy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الأول</th>
      <td>{{$t->m1}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach

<!-- // -->



@foreach ( $z as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">الخط </th>
      <td >{{$t->الخط}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $zz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $zzz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  <table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثاني</th>
      <td>{{$t->m2}}</td>
    </tr>
   
  </tbody>
</table>

@endforeach

<!-- // -->



@foreach ( $u as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">الخط </th>
      <td >{{$t->الخط}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $uu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $uuu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  <table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثالث</th>
      <td>{{$t->m3}}</td>
    </tr>
   
  </tbody>
</table>

@endforeach

@elseif  ( $zz == 'السنة ثالثة إبتدائي')


<?php
$x=Auth::user()->id;
$aa='semstre 1';
$bb='semstre 2';
$cc='semstre 3';
$y = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yy = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yyy = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$a = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();

$z = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zz = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zzz = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$b = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$u = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uu = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uuu = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$c = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$i = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get(); 
$p = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get(); 
?>


@foreach ( $y as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $yy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>




@foreach ( $yyy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
</table>

<br>

@endforeach

@foreach ( $a as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغة الفرنسية </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الأول</th>
      <td>{{$t->m1}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach

<!-- // -->



@foreach ( $z as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $zz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $zzz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  
</table>

@endforeach


@foreach ( $b as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغة الفرنسية </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثاني</th>
      <td>{{$t->m2}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach


<!-- // -->



@foreach ( $u as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $uu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $uuu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
 

@endforeach
@foreach ( $c as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغة الفرنسية </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثالث</th>
      <td>{{$t->m3}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach

@elseif  ( $zz == 'السنة رابعة إبتدائي')


<?php
$x=Auth::user()->id;
$aa='semstre 1';
$bb='semstre 2';
$cc='semstre 3';
$y = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yy = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yyy = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$a = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();

$z = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zz = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zzz = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$b = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$u = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uu = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uuu = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$c = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$i = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get(); 
$p = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get(); 
?>


@foreach ( $y as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $yy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>




@foreach ( $yyy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

  


    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
</table>

<br>

@endforeach

@foreach ( $a as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغة الفرنسية </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
  
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الأول</th>
      <td>{{$t->m1}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach

<!-- // -->



@foreach ( $z as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $zz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $zzz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  
</table>

@endforeach


@foreach ( $b as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغة الفرنسية </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثاني</th>
      <td>{{$t->m2}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach


<!-- // -->



@foreach ( $u as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $uu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $uuu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
 

@endforeach
@foreach ( $c as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغة الفرنسية </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثالث</th>
      <td>{{$t->m3}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach










@elseif  ( $zz == 'السنة خامسة إبتدائي')



<?php
$x=Auth::user()->id;
$aa='semstre 1';
$bb='semstre 2';
$cc='semstre 3';
$y = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yy = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yyy = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$a = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();

$z = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zz = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zzz = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$b = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$u = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uu = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uuu = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$c = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$i = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get(); 
$p = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get(); 
?>


@foreach ( $y as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $yy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>




@foreach ( $yyy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">  تاريخ </th>
      <td >{{$t->تاريخ}}</td>
  
    </tr>
    <tr>
      <th scope="row"> جغرافيا </th>
      <td >{{$t->جغرافيا}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية_مدنية </th>
      <td >{{$t->تربية_مدنية}}</td>
  
    </tr>



    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
</table>

<br>

@endforeach

@foreach ( $a as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 
    <tr>
      <th scope="row">الانقليزية  </th>
      <td >{{$t->الانقليزية}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الأول</th>
      <td>{{$t->m1}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach

<!-- // -->



@foreach ( $z as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $zz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $zzz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">  تاريخ </th>
      <td >{{$t->تاريخ}}</td>
  
    </tr>
    <tr>
      <th scope="row"> جغرافيا </th>
      <td >{{$t->جغرافيا}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية_مدنية </th>
      <td >{{$t->تربية_مدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  
</table>

@endforeach


@foreach ( $b as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 


    <tr>
      <th scope="row">الانقليزية  </th>
      <td >{{$t->الانقليزية}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثاني</th>
      <td>{{$t->m2}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach


<!-- // -->



@foreach ( $u as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $uu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $uuu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">  تاريخ </th>
      <td >{{$t->تاريخ}}</td>
  
    </tr>
    <tr>
      <th scope="row"> جغرافيا </th>
      <td >{{$t->جغرافيا}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية_مدنية </th>
      <td >{{$t->تربية_مدنية}}</td>
  
    </tr>


    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
 

@endforeach
@foreach ( $c as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغات </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 
    <tr>
      <th scope="row">الانقليزية  </th>
      <td >{{$t->الانقليزية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثالث</th>
      <td>{{$t->m3}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach


@elseif  ( $zz == 'السنة سادسة إبتدائي')




<?php
$x=Auth::user()->id;
$aa='semstre 1';
$bb='semstre 2';
$cc='semstre 3';
$y = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yy = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$yyy = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();
$a = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$aa)->get();

$z = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zz = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$zzz = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$b = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$bb)->get();
$u = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uu = DB::table('al3ouloums')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$uuu = DB::table('tanschaas')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$c = DB::table('francais')->where('parent_id','=',$x)->where('semstre','=',$cc)->get();
$i = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$bb)->get(); 
$p = DB::table('langaearabes')->where('parent_id','=',$x)->where('semstre','=',$cc)->get(); 
?>


@foreach ( $y as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $yy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>




@foreach ( $yyy as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">  تاريخ </th>
      <td >{{$t->تاريخ}}</td>
  
    </tr>
    <tr>
      <th scope="row"> جغرافيا </th>
      <td >{{$t->جغرافيا}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية_مدنية </th>
      <td >{{$t->تربية_مدنية}}</td>
  
    </tr>



    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
</table>

<br>

@endforeach

@foreach ( $a as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغات </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 
    <tr>
      <th scope="row">الانقليزية  </th>
      <td >{{$t->الانقليزية}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الأول</th>
      <td>{{$t->m1}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach

<!-- // -->



@foreach ( $z as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $zz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $zzz as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">  تاريخ </th>
      <td >{{$t->تاريخ}}</td>
  
    </tr>
    <tr>
      <th scope="row"> جغرافيا </th>
      <td >{{$t->جغرافيا}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية_مدنية </th>
      <td >{{$t->تربية_مدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
  
</table>

@endforeach


@foreach ( $b as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغات </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 


    <tr>
      <th scope="row">الانقليزية  </th>
      <td >{{$t->الانقليزية}}</td>
  
    </tr>
 

    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثاني</th>
      <td>{{$t->m2}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach


<!-- // -->



@foreach ( $u as $t  )

<h1 style='color:red;'> {{$t->semstre}}  </h1>
<br>  

<table class="table table-dark">
  
  <tbody>
   
    
    <tr>
      <th scope="row">إسم التلميذ و لقبه</th>
      <td >{{Auth::user()->name}}</td>
   
    </tr>
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال اللغة العربية</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تواصل شفوي</th>
      <td>{{$t->تواصل_شفوي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">قراءة</th>
      <td>{{$t->قراءة}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">قواعد للغة </th>
      <td >{{$t->قواعد_للغة}}</td>
  
    </tr>
    <tr>
      <th scope="row">انتاج كتابي</th>
      <td>{{$t->انتاج_كتابي}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>



@foreach ( $uu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
    
      <th scope="col"  colspan="2">مجال العلوم و التكنولوجيا</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">رياضيات</th>
      <td>{{$t->رياضيات}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">الايقاظ العلمي </th>
      <td>{{$t->الايقاظ_العلمي}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية تكنولوجية </th>
      <td >{{$t->تربية_تكنولوجية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
</table>
@endforeach

<br>


@foreach ( $uuu as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال التنشئة </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">تربية اسلامية</th>
      <td>{{$t->تربية_اسلامية}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">تربية تشكيلية</th>
      <td>{{$t->تربية_تشكيلية}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">تربية موسيقية </th>
      <td >{{$t->تربية_موسيقية}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية بدنية </th>
      <td >{{$t->تربية_بدنية}}</td>
  
    </tr>
    <tr>
      <th scope="row">  تاريخ </th>
      <td >{{$t->تاريخ}}</td>
  
    </tr>
    <tr>
      <th scope="row"> جغرافيا </th>
      <td >{{$t->جغرافيا}}</td>
  
    </tr>
    <tr>
      <th scope="row"> تربية_مدنية </th>
      <td >{{$t->تربية_مدنية}}</td>
  
    </tr>


    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>
 

@endforeach
@foreach ( $c as $t  )



<table class="table table-dark">
  
  <tbody>
   
    
  
  </tbody>
</table>

<br>


<table class="table">
  <thead>
    <tr>
   
      <th scope="col"  colspan="2">مجال اللغات </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> expr orale</th>
      <td>{{$t->expr_orale}}</td>
     
     
    </tr>
    <tr>
      <th scope="row">lecture </th>
      <td>{{$t->lecture}}</td>
      
      
    </tr>
    <tr>
      <th scope="row">prod_écrite  </th>
      <td >{{$t->prod_écrite}}</td>
  
    </tr>
 
    <tr>
      <th scope="row">الانقليزية  </th>
      <td >{{$t->الانقليزية}}</td>
  
    </tr>
    <tr>
      <th scope="row">معدل المجال</th>
      <td>{{$t->معدل_المجال}}</td>
     
     
    </tr>
  </tbody>

</table>

<br>
<table class="table">
  <tbody>
    <tr>
      <th scope="row"> معدل الثلاثي الثالث</th>
      <td>{{$t->m3}}</td>
    </tr>
   
  </tbody>
</table>
@endforeach







@endif



            </center>
  </section><!-- event blog -->
  {!! Toastr::message() !!}


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