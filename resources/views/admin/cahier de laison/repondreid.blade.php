<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajout message</h2>
<form action="{{route('btnAjoutMessage')}}" method="post"  >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
	
          <?php
$ty= Auth::user()->classe;
$a= Auth::user()->id;

?>
                        <?php
$x=Auth::user()->id;


$m = \App\Models\Message::with('parent')->where('enseignant_id','=',$x)->get();

?>
          <input class="form-control" type="hidden" value="{{$message->parent_id}}" name="nom_parent" readonly>
          <label>Message from {{$message->parent->name}} </label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <input class="form-control" type="text" value="{{$message->message}}"  readonly>
          <label>Message</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <center>
      
        
        <td><img src="{{asset('smile.jpg')}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
        <input type="radio" id="huey" name="image" value="smile.jpg">
        
        <td><img src="{{asset('triste.jpg')}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
        <input type="radio" id="huey" name="image" value="triste.jpg">
        
        <td><img src="{{asset('neutre.png')}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
        <input type="radio" id="huey" name="image" value="neutre.png">
        </center>
         
          <textarea class="form-control" name="message" id="" cols="30" placeholder=" votre réponse "  rows="10" required></textarea>
          <input type="hidden" name="etat" value="envoyer" >
          <input type="hidden" name="enseignant_id" value="{{$a}}" >
 </div>

 <a href="{{route('affichecahierlaison')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

