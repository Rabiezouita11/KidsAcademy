<section class="facility padding-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-symbols"></span>
						<a href="{{route('affichemessage')}}"><h4>cahier de liaison /كراس المتابعة المدرسية </h4></a>
						<?php
$x=Auth::user()->id;

$b = DB::table('messages')->where('parent_id','=',$x)->count(); 
?>
						<span style="font-size: 20px; background-color: red;" class="badge badge-pill badge-dark">{{$b}}
					</div><!-- facility item -->
				</div>
<?php
$x=$a->format('Y-m-d');
$a=Auth::user()->date_absence;
?>

                 @if (  $x == $a )
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-avatar"></span>
						<h4>absences / غيابات </h4>
						@if (Auth::user()->etat =='absent' )

						<td><img src="absent.png" alt=" " class="img-fluid"  width="60px" height="60px"></td>
						<strong><p> {{Auth::user()->date_absence}} </p> </strong>
						@else (Auth::user()->etat =='present' )
				
						<td><img src="present.jpg" alt=" " class="img-fluid"  width="60px" height="60px"></td>
						<strong><p> {{Auth::user()->date_absence}} </p> </strong>
						@endif
						
						<p></p>
					</div><!-- facility item -->
				</div>
				@else 
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-avatar"></span>
						<h4>absences / غيابات</h4>
					
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>
						
						<p></p>
					</div><!-- facility item -->
					</div>
				@endif
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-pen"></span>
						<a href="{{route('affichedossiereleve')}}"><h4>dossier d'élève /  سجل التلميذ</h4></a>
						<p></p>
					</div><!-- facility item -->
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
						<span class="icon flaticon-calendar"></span>
					<a href="{{route('rondivo')}}"> 	<h4>rendez-vous / موعد</h4></a>

	
             
					<?php
$x=Auth::user()->name;

$m = DB::table('rondivos')->where('nom_parent','=',$x)->where('vue','=','ok')->count(); 
?>
						<span style="font-size: 20px;" class="badge badge-pill badge-dark">{{$m}}
					

					</div><!-- facility item -->
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
					<img src="Les_Scouts_Tunisiens.png" alt=" " class="rounded-circle img-thumbnail avatar-lg" rel="apple-touch-icon"  width="130px" height="130px">
					<a href="{{route('scouts')}}"><h4>Scouts tunisiens / الكشافة التونسية</h4></a>	
						<p></p>
					</div><!-- facility item -->
				</div>
				
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="facility-item">
					<img src="Aflatoun.png" alt=" " class="rounded-circle img-thumbnail avatar-lg" rel="apple-touch-icon"  width="140px" height="140px">
				
						<a href="{{route('aflaton')}}"> 	<h4>club aflatoun / نادي أفلاطون</h4></a>

						<p></p>
					</div><!-- facility item -->
					
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- facility -->
	<!-- facility End here -->