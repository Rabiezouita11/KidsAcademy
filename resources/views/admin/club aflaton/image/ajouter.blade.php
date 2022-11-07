<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajout image</h2>
<form action="{{route('btnAjoutimage')}}" method="post"  enctype="multipart/form-data"  >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
	  
          <label>Nom </label>
          <div>@if ($errors->has('nom'))
          <strong style="color: red;">{{ $errors->first('nom') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="nom" required>
          <label>image</label>
          <input type="file"  name="image" class="form-control">
          <input type="hidden" name="date" value="{{$date}}">
 </div>

 <a href="{{route('image')}}" class="btn btn-default">Annuler</a>
 <button  type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

