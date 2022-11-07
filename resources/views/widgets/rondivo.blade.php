@if( $rondivo->isEmpty())
  
  <center>  <h2>  il n'ya pas des rondivo   </h2>
  <a class="btn btn-primary" href="{{route('affiche_ajouter_rondivo')}}" role="button">ajouter rondivo</a></center>
@else

<div class="body table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th>nom de parent</th>
                  <th>nom de prof</th>
                  <th>message</th>
                  <th>objet</th>
                  <th>image</th>
                  <th>vue</th>
                  <th> action </th>
          
              </tr>
          </thead>
          
          <tbody>

          @foreach( $rondivo as $l)
          <?php

$y=$l->etat;
$x=$l->vue;
           ?>
              <tr>
                  <th scope="row">{{$l->id}}</th>
                  <td>{{$l->nom_parent}}</td>
                  <td>{{$l->nom_prof}}</td>
                  <td>{{$l->message}}</td>
                  <td>{{$l->objet}}</td>

                  <td><img src="{{$l->image}}" alt=" " class="img-fluid"  width="50px" height="50px"></td>
                  @if(  $x == 'ok' ) 
                  <td><img src="loading_transparent.gif" alt=" " class="img-fluid"  width="80px" height="80px"></td> 
                  @else 
                  <td> vue  </td>
                  @endif
                  <td>  <a class="btn btn-danger" href="{{ route('Supprimerrondivo', ['id' => $l->id]) }}"  onclick="return confirm('Etes-vous sur ?');" role="button">supprimer</a></td>
              
              </tr>
             @endforeach
             <a class="btn btn-primary" href="{{route('affiche_ajouter_rondivo')}}" role="button">ajouter rondivo</a>
          </tbody>

      </table>
      
  </div>
</div>
</div>
</div>
@endif

