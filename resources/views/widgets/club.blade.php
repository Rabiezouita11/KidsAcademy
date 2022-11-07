<center>

              
     

        <?php
$x=Auth::user()->name;

$m = DB::table('clubs')->where('nom_parent','=',$x)->count(); 
$y = DB::table('clubs')->where('nom_parent','=',$x)->get(); 
?>

    
             @if ($m > 0 )
              <div class="col-lg-8 col-md-6 col-xs-12">
            <form class="contact-form" action="{{route('AjoutAflaton')}}" method="post" >
            <input type="hidden" name="_token" value="{{ Session::token() }}">
              <input type="hidden" name="nom_parent" value="{{$x}}" id="">
              <input type="hidden" name="reponse" value="يتم معالجة ردك" id="">
            
              @foreach ( $y as $a )
              <label for="" > :هل سمعت عن هذا البرنامج سابقا </label>
            <input type="text" name="s1" placeholder=" هل سمعت عن هذا البرنامج سابقا " value="{{$a->s1}}" class="contact-input" readonly>
              <br>
              <br>

            <input type="hidden"  placeholder=" هل سمعت عن هذا البرنامج سابقا "   class="contact-input" required>
           
          
            <label for="">  :هل ترى أية موهبة عند طفلك</label>
              <input type="text" name="s2" placeholder="هل ترى أية موهبة عند طفلك "  value="{{$a->s2}}"  class="contact-input" readonly>
             <br>
             <br>
             <label for=""> :ما الذي تنتظره من هذا البرنامج</label>
              <input type="text" name="s3" placeholder="ما الذي تنتظره من هذا البرنامج " value="{{$a->s3}}"  class="contact-input" readonly>
             <br>
             <br>
             <label for=""> :هل لدى طفلك مشاكل نفسية"</label>
             <input type="text" name="s4" placeholder="هل لدى طفلك مشاكل نفسية" value="{{$a->s4}}"  class="contact-input">
             <br>
             <br>
             <label for=""> :هل قام طفلك بتجربة ادخار المال سابقا ؟</label>
             
             <input type="text" name="s5" placeholder="هل قام طفلك بتجربة ادخار المال سابقا ؟" value="{{$a->s5}}"  class="contact-input" readonly>
           <?php
$g=$a->reponse;
           ?>
           
              @if ( $g == 'يتم معالجة ردك'  )
              <button type="button"  style="font-size 40px;"  class="btn btn-info">يتم معالجة ردك</button>
            @elseif ( $g == 'refuser'  )
            <button type="button"  style="font-size 40px;"  class="btn btn-danger">تم رفضك </button>
            @elseif ( $g == 'accepter'  )
            <a href="{{route('indexaflatone')}}">  <button style="font-size 40px;" type="button" class="btn btn-success">  تم قبولك</button>  </a>
          @endif
              @endforeach
              @endif


      
            </form>
          </div></center>