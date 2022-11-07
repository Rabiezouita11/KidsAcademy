<?php
$ty= Auth::user()->classe;


?>
 


 
@if ( $ty =='السنة الأولى إبتدائي' )

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

</head>
<body>
<div class="container">
<h2 class="text-center">Ajout dossier eleve</h2>


 <div class="pro-description">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sescription" aria-controls="sescription" role="tab"
                  data-bs-toggle="tab" data-bs-target="#sescription">semstre 1</a></li>
              <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab"
                  data-bs-target="#reviews">semstre 2
                  </a></li>
                  <li role="presentation"><a href="#tunis" aria-controls="tunis" role="tab" data-bs-toggle="tab"
                  data-bs-target="#tunis">semstre 3
                  </a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sescription">
              <li class="contact-item">
                <div class="form-group">
                <form action="{{route('btnAjoutsana12')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الأول</label>
          <input class="form-control" type="number" name="m1"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 1" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="" value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
 <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>الخط</label>
          <input class="form-control" type="number" name="الخط" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
         
         
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية"  required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
      
                </div>
              </li>
              

            
              </div>
              <div role="tabpanel" class="tab-pane " id="tunis">
              <li class="contact-item">
                <div class="form-group">
                <label>معدل الثلاثي الثالث</label>
                <form action="{{route('semstre3')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input class="form-control" type="number" name="m3"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 3" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>الخط</label>
          <input class="form-control" type="number" name="الخط" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية"  required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
              

            
              </div>
              
              <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="pro-reviews">
             
                  
              <li class="contact-item">
              
                <div class="form-group">
                <form action="{{route('semstre2')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الثاني</label>
          <input class="form-control" type="number" name="m2"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 2" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>الخط</label>
          <input class="form-control" type="number" name="الخط" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية"  required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
                </div><!-- pro reviews -->
               
               
                  
                </div>
              </div>
           
        
          
        <div class="form-group">
	  	
 </div>




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

@elseif ( $ty =='السنة الثانية إبتدائي' )

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

</head>
<body>
<div class="container">
<h2 class="text-center">Ajout dossier eleve</h2>


 <div class="pro-description">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sescription" aria-controls="sescription" role="tab"
                  data-bs-toggle="tab" data-bs-target="#sescription">semstre 1</a></li>
              <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab"
                  data-bs-target="#reviews">semstre 2
                  </a></li>
                  <li role="presentation"><a href="#tunis" aria-controls="tunis" role="tab" data-bs-toggle="tab"
                  data-bs-target="#tunis">semstre 3
                  </a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sescription">
              <li class="contact-item">
                <div class="form-group">
                <form action="{{route('btnAjoutsana12')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الأول</label>
          <input class="form-control" type="number" name="m1"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 1" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="" value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
 <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>الخط</label>
          <input class="form-control" type="number" name="الخط" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
         
         
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية"  required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
      
                </div>
              </li>
              

            
              </div>
              <div role="tabpanel" class="tab-pane " id="tunis">
              <li class="contact-item">
                <div class="form-group">
                <label>معدل الثلاثي الثالث</label>
                <form action="{{route('semstre3')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input class="form-control" type="number" name="m3"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 3" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
         <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>الخط</label>
          <input class="form-control" type="number" name="الخط" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
         
         
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية"  required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
              

            
              </div>
              
              <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="pro-reviews">
             
                  
              <li class="contact-item">
              
                <div class="form-group">
                <form action="{{route('semstre2')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الثاني</label>
          <input class="form-control" type="number" name="m2"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 2" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
         <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>الخط</label>
          <input class="form-control" type="number" name="الخط" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
         
         
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية"  required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
                </div><!-- pro reviews -->
               
               
                  
                </div>
              </div>
           
        
          
        <div class="form-group">
	  	
 </div>




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


@elseif ( $ty =='السنة ثالثة إبتدائي')


<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

</head>
<body>
<div class="container">
<h2 class="text-center">Ajout dossier eleve</h2>


 <div class="pro-description">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sescription" aria-controls="sescription" role="tab"
                  data-bs-toggle="tab" data-bs-target="#sescription">semstre 1</a></li>
              <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab"
                  data-bs-target="#reviews">semstre 2
                  </a></li>
                  <li role="presentation"><a href="#tunis" aria-controls="tunis" role="tab" data-bs-toggle="tab"
                  data-bs-target="#tunis">semstre 3
                  </a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sescription">
              <li class="contact-item">
                <div class="form-group">
                <form action="{{route('s1')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الأول</label>
          <input class="form-control" type="number" name="m1"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 1" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="" value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
         
         
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
      
                </div>
              </li>
              

            
              </div>
              <div role="tabpanel" class="tab-pane " id="tunis">
              <li class="contact-item">
                <div class="form-group">
                <label>معدل الثلاثي الثالث</label>
                <form action="{{route('s3')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input class="form-control" type="number" name="m3"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 3" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
              

            
              </div>
              
              <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="pro-reviews">
             
                  
              <li class="contact-item">
              
                <div class="form-group">
                <form action="{{route('s2')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الثاني</label>
          <input class="form-control" type="number" name="m2"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 2" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
                </div><!-- pro reviews -->
               
               
                  
                </div>
              </div>
           
        
          
        <div class="form-group">
	  	
 </div>




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
































@elseif ( $ty =='السنة رابعة إبتدائي' )

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

</head>
<body>
<div class="container">
<h2 class="text-center">Ajout dossier eleve</h2>


 <div class="pro-description">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sescription" aria-controls="sescription" role="tab"
                  data-bs-toggle="tab" data-bs-target="#sescription">semstre 1</a></li>
              <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab"
                  data-bs-target="#reviews">semstre 2
                  </a></li>
                  <li role="presentation"><a href="#tunis" aria-controls="tunis" role="tab" data-bs-toggle="tab"
                  data-bs-target="#tunis">semstre 3
                  </a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sescription">
              <li class="contact-item">
                <div class="form-group">
                <form action="{{route('s1')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الأول</label>
          <input class="form-control" type="number" name="m1"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 1" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="" value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
         
         
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
      
                </div>
              </li>
              

            
              </div>
              <div role="tabpanel" class="tab-pane " id="tunis">
              <li class="contact-item">
                <div class="form-group">
                <label>معدل الثلاثي الثالث</label>
                <form action="{{route('s3')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input class="form-control" type="number" name="m3"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 3" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
              

            
              </div>
              
              <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="pro-reviews">
             
                  
              <li class="contact-item">
              
                <div class="form-group">
                <form action="{{route('s2')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الثاني</label>
          <input class="form-control" type="number" name="m2"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 2" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
                </div><!-- pro reviews -->
               
               
                  
                </div>
              </div>
           
        
          
        <div class="form-group">
	  	
 </div>




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
@elseif ( $ty =='السنة خامسة إبتدائي' )

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

</head>
<body>
<div class="container">
<h2 class="text-center">Ajout dossier eleve</h2>


 <div class="pro-description">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#sescription" aria-controls="sescription" role="tab"
                  data-bs-toggle="tab" data-bs-target="#sescription">semstre 1</a></li>
              <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-bs-toggle="tab"
                  data-bs-target="#reviews">semstre 2
                  </a></li>
                  <li role="presentation"><a href="#tunis" aria-controls="tunis" role="tab" data-bs-toggle="tab"
                  data-bs-target="#tunis">semstre 3
                  </a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="sescription">
              <li class="contact-item">
                <div class="form-group">
                <form action="{{route('sana1')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الأول</label>
          <input class="form-control" type="number" name="m1"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 1" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="" value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
         
         
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ_العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية_تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تاريخ </label>
          <input class="form-control" type="number" name="تاريخ" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> جغرافيا  </label>
          <input class="form-control" type="number" name="جغرافيا" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> تربية مدنية </label>
          <input class="form-control" type="number" name="تربية_مدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  الانقليزية </label>
          <input class="form-control" type="number" name="الانقليزية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
      
                </div>
              </li>
              

            
              </div>
              <div role="tabpanel" class="tab-pane " id="tunis">
              <li class="contact-item">
                <div class="form-group">
                <label>معدل الثلاثي الثالث</label>
                <form action="{{route('sana3')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
          <input class="form-control" type="number" name="m3"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 3" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تاريخ </label>
          <input class="form-control" type="number" name="تاريخ" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> جغرافيا  </label>
          <input class="form-control" type="number" name="جغرافيا" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> تربية مدنية </label>
          <input class="form-control" type="number" name="تربية_مدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  الانقليزية </label>
          <input class="form-control" type="number" name="الانقليزية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
              

            
              </div>
              
              <div role="tabpanel" class="tab-pane" id="reviews">
                <div class="pro-reviews">
             
                  
              <li class="contact-item">
              
                <div class="form-group">
                <form action="{{route('sana2')}}" method="post"   >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
                <label>معدل الثلاثي الثاني</label>
          <input class="form-control" type="number" name="m2"  required>
                 <br>
                 <input class="form-control" type="text" name="semstre" value="semstre 2" readonly>
                 <label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
         @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="parent_id" id="nom_prof" class="form-control" required>

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="parent_id" id="nom_prof" class="form-control" required>

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
       


          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text"  value="{{ Auth::user()->name}}" readonly>
          <input class="form-control" type="hidden" name="enseignant_id" value="{{ Auth::user()->id}}" readonly>
          <br>
          <center> مجال اللغة العربية   </center>
          <br>
          <label>تواصل شفوي</label>
          <input class="form-control" type="number" name="تواصل_شفوي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>قراءة</label>
          <input class="form-control" type="number" name="قراءة"  required>
          <br>
          <label>قواعد للغة</label>
          <input class="form-control" type="number" name="قواعد_للغة" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>انتاج كتابي</label>
          <input class="form-control" type="number" name="انتاج_كتابي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="arabe" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال العلوم و التكنولوجيا  </center>
          <br>

          <label>رياضيات </label>
          <input class="form-control" type="number" name="رياضيات" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>الايقاظ العلمي</label>
          <input class="form-control" type="number" name="الايقاظ العلمي" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تكنولوجية</label>
          <input class="form-control" type="number" name="تربية تكنولوجية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="teck" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center> مجال التنشئة  </center>
          <br>
          <label>تربية اسلامية</label>
          <input class="form-control" type="number" name="تربية_اسلامية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية تشكيلية</label>
          <input class="form-control" type="number" name="تربية_تشكيلية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية موسيقية</label>
          <input class="form-control" type="number" name="تربية_موسيقية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تربية بدنية </label>
          <input class="form-control" type="number" name="تربية_بدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>تاريخ </label>
          <input class="form-control" type="number" name="تاريخ" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> جغرافيا  </label>
          <input class="form-control" type="number" name="جغرافيا" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> تربية مدنية </label>
          <input class="form-control" type="number" name="تربية_مدنية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="tans" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <center>مجال اللغة الفرنسية  </center>
          <br>
          <label>expr orale</label>
          <input class="form-control" type="number" name="expr_orale" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label> lecture</label>
          <input class="form-control" type="number" name="lecture" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  prod écrite</label>
          <input class="form-control" type="number" name="prod_écrite" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>  الانقليزية </label>
          <input class="form-control" type="number" name="الانقليزية" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <label>معدل المجال</label>
          <input class="form-control" type="number" name="fr" value="{{ old('تواصل شفوي') }}" required>
          <br>
          <div class="form-group">
                  <center>
<a href="{{route('showdoosiereleve')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success ">Ajouter</button>
</form>
 </center>
 </div>
                </div>
              </li>
                </div><!-- pro reviews -->
               
               
                  
                </div>
              </div>
           
        
          
        <div class="form-group">
	  	
 </div>




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








































@elseif ( $ty =='السنة سادسة إبتدائي' )

@endif