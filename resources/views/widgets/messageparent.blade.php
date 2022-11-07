<?php
$x=Auth::user()->id;
$m = \App\Models\Message::with('parent')->where('parent_id','=',$x)->get();
?>
@foreach ($m as $mm)
<?php
$aa=$mm->etat;

?>
		<div class="testimonial-items">
				<div class="testimonial-slider swiper-container">
					<div class="swiper-wrapper">
                       @if ( $aa == 'reçoit'   )
						<div class="testimonial-item swiper-slide">
							<div class="testimonial-details">
								<p>{{$mm->message}}</p>
								<h4>{{$mm->parent->name}} <span>parent </span></h4>
								
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
								<h4>{{$mm->enseignant->name}} <span>enseignant </span></h4>
								
							</div>
							<div class="testimonial-image">
								<img src="{{$mm->enseignant->image}}" alt="client image"
									class="img-responsive">
							</div>
						</div><!-- testimonial-item -->
                        @endif
                        @endforeach
						<br>
                     
</div>

   