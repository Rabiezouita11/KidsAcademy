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
	  	<label>nom de parent </label>
          <?php
$ty= Auth::user()->classe;
$a= Auth::user()->id;

?>
          @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="nom_parent" id="nom_prof" class="form-control">

            @foreach($m1 as $cat)

        <option value="{{$cat->id}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m2 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m3 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m4 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m5 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m6 as $cat)

<option value="{{$cat->id}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
        <center>

        <td><img src="smile.jpg" alt=" " class="img-fluid"  width="100px" height="100px"></td>
        <input type="radio" id="huey" name="image" value="smile.jpg">
        
        <td><img src="triste.jpg" alt=" " class="img-fluid"  width="100px" height="100px"></td>
        <input type="radio" id="huey" name="image" value="triste.jpg">
        
        <td><img src="neutre.png" alt=" " class="img-fluid"  width="100px" height="100px"></td>
        <input type="radio" id="huey" name="image" value="neutre.png">
        </center>
<br>

          <label>Message</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder=" votre réponse " required></textarea>
          <input type="hidden" name="etat" value="envoyer" >
          <input type="hidden" name="enseignant_id" value="{{$a}}" >
 </div>

 <a href="{{route('affichecahierlaison')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

