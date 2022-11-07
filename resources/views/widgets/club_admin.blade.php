@if( $aflaton->isEmpty())
  
  <center>  <h2>  il n'ya pas des informations   </h2>
 
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>هل سمعت عن هذا البرنامج سابقا</th>
                  <th>هل ترى أية موهبة عند طفلك</th>
                  <th>ما الذي تنتظره من هذا البرنامج</th>
                  <th>هل لدى طفلك مشاكل نفسية</th>
                  <th>هل قام طفلك بتجربة ادخار المال سابقا ؟</th>
                  <th>resultat</th>
              
          
              </tr>
          </thead>
          
          <tbody>

          @foreach( $aflaton as $l)
          <?php

           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->nom_parent}}</td>
                  <td>{{$l->s1}}</td>
                  <td>{{$l->s2}}</td>
                  <td>{{$l->s3}}</td>
                  <td>{{$l->s4}}</td>
                  <td>{{$l->s5}}</td>
                  <td>  {{$l->reponse}} </td>
                  <td>   <form action="{{route('updateAflaton1')}}" method="post"  >

<input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{ $l->id }}">
                                     <input type="hidden" name="reponse" class="btn btn-primary"  value="accepter">  
                                  
                                     <input type="submit"  class="btn btn-primary"  value="accepter">  
                                    </form>
                                    
                                  </td>
                                  <td>   <form action="{{route('updateAflaton2')}}" method="post"  >

<input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{ $l->id }}">
                                     <input type="hidden" name="reponse" class="btn btn-primary"  value="refuser">  
                                  
                                     <input type="submit"  class="btn btn-danger"  value="refuser">  
                                    </form>
                                    
                                  </td>
              
              </tr>
             @endforeach
          
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif

