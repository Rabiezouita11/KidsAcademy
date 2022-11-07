
  @if( $m->isEmpty())

<center>  <h2>  il n'ya pas des élève   </h2></center>

                     
                      @else
                      

<div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>nom et prenom</th>
                                        <th>email</th>
                                        <th>image</th>
                                        <th>présence</th>
                                  <th>dernière présence</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach( $m as $l)
                                
                                    <tr>
                                 <?php
  $x=$l->image;
  $y=$l->etat;
                                 ?>
                                        <th scope="row">{{$l->id}}</th>
                                        <td>{{$l->name}}</td>
                                        <td>{{$l->email}}</td>
                                        <td><img src="{{asset($x)}}" alt=" " class="img-fluid"  width="60px" height="60px"></td>
                                
                                        @if ($l->etat)

                                        @if ($y =='present')
                                        <td><img src="present.jpg" alt=" " class="img-fluid"  width="60px" height="60px"></td>
@else ($y =='absent')
  <td><img src="absent.png" alt=" " class="img-fluid"  width="60px" height="60px"></td> 

  @endif
 
                                        @else 
                                        <td><img src="loading-25.gif" alt=" " class="img-fluid"  width="60px" height="60px"></td> 

                                        @endif
                                        @if ($l->date_absence)
     <td>{{$l->date_absence}}</td>
     @else
     <td><img src="loading_transparent.gif" alt=" " class="img-fluid"  width="80px" height="80px"></td> 

   
     @endif
                                   <td>   <form action="{{route('modifier')}}" method="post"  >

<input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{ $l->id }}">
                                     <input type="hidden" name="etat" class="btn btn-primary"  value="present">  
                                  
<input type="hidden" name="nom" value="{{ $l->name }}" id="">
<input type="hidden" name="date_presence" value="{{ $a->format('Y-m-d')}}" id="">
<input type="hidden" name="classe" value="{{ $l->classe }}" id="">
<input type="hidden" name="etat" value="present" id="">

                                     <input type="hidden" name="date_absence" value="{{$a->format('Y-m-d')}}" id="">

                                     <input type="submit"  class="btn btn-primary"  value="present">  
                                    </form>
                                    
                                  </td>
                                  <td>   <form action="{{route('modifier')}}" method="post"  >

<input type="hidden" name="_token" value="{{ Session::token() }}">
 <input type="hidden" name="id" value="{{ $l->id }}">
                                     <input type="hidden" name="etat" class="btn btn-primary"  value="absent">  
                                  
                                     <input type="hidden" name="date_absence" value="{{$a->format('Y-m-d')}}" id="">
                                  
                                     <input type="hidden" name="nom" value="{{ $l->name }}" id="">
<input type="hidden" name="date_presence" value="{{ $a->format('Y-m-d')}}" id="">
<input type="hidden" name="classe" value="{{ $l->classe }}" id="">
<input type="hidden" name="etat" value="absent" id="">
                                     <input type="submit"  class="btn btn-danger"  value="absent">  
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