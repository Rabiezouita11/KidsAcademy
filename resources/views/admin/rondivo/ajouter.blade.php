<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajout rondivo</h2>
<form action="{{route('AjoutRondivo')}}" method="post"  enctype="multipart/form-data"  >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
	  	<label>nom de parent </label>
<?php
$ty= Auth::user()->classe;


?>
          @if ( $ty =='السنة الأولى إبتدائي' )
          <select name="nom_parent" id="nom_prof" class="form-control">

            @foreach($m1 as $cat)

        <option value="{{$cat->name}}">  {{ $cat->name }}</option>
        @endforeach
        @elseif ( $ty =='السنة الثانية إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m2 as $cat)

<option value="{{$cat->name}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة ثالثة إبتدائي')
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m3 as $cat)

<option value="{{$cat->name}}">  {{ $cat->name }}</option>
@endforeach

@elseif ( $ty =='السنة رابعة إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m4 as $cat)

<option value="{{$cat->name}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة خامسة إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m5 as $cat)

<option value="{{$cat->name}}">  {{ $cat->name }}</option>
@endforeach
@elseif ( $ty =='السنة سادسة إبتدائي' )
        <select name="nom_parent" id="nom_prof" class="form-control">

@foreach($m6 as $cat)

<option value="{{$cat->name}}">  {{ $cat->name }}</option>
@endforeach


        @endif
        </select>
         <input type="hidden" name="vue"  value="ok" id="">
          <label>Nom prof</label>
          <div>@if ($errors->has('nomproduit'))
          <strong style="color: red;">{{ $errors->first('nomproduit') }}</strong>
          @endif</div>
          
          <input class="form-control" type="text" name="nom_prof" value="{{ Auth::user()->name}}" readonly>
          <label>objet</label>
          <div>@if ($errors->has('objet'))
<strong style="color: red;">{{ $errors->first('objet') }}</strong>
@endif</div>
          <input class="form-control" type="text" name="objet" value="{{ old('objet') }}" required>
          <br>
          <label>date</label>
          <div>@if ($errors->has('date'))
<strong style="color: red;">{{ $errors->first('date') }}</strong>
@endif</div>
          <input class="form-control" type="date" value="{{ old('date') }}"  name="date" required>
          <br>
          <label>date de debut</label>
          <div>@if ($errors->has('time_debut'))
<strong style="color: red;">{{ $errors->first('time_debut') }}</strong>
@endif</div>
          <input class="form-control" type="time"   value="{{ old('time_debut') }}" name="time_debut"  required>
          <br>
          <label>date de fin</label>
          <div>@if ($errors->has('time_fin'))
<strong style="color: red;">{{ $errors->first('time_fin') }}</strong>
@endif</div>
          <input class="form-control" type="time"  value="{{ old('time_fin') }}" name="time_fin" required>
          <br>
          <label>image</label>
          <div>@if ($errors->has('objet'))
<strong style="color: red;">{{ $errors->first('objet') }}</strong>
@endif</div>
          <input class="form-control" type="file" name="image" required>
          <br>
         <label for=""> Message </label>
         <div>
         @if ($errors->has('message'))
<strong style="color: red;">{{ $errors->first('message') }}</strong>
@endif</div>
         <textarea name="message" id=""  value="{{ old('message') }}" cols="150" rows="10" required></textarea>
         </div>
 </div>

 <center><a href="{{route('affiche_rondivo')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success pull-right">Ajouter</button>
 </center>
</form></body>
</html>

