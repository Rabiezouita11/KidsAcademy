<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">{{$users->classe}}</h2>
 	<br/>
<form >
 	<div class="form-group">
     
        <label>Nom et prenom</label>
     <input class="form-control" type="text"  value="{{ $users->name }}" readonly>
     <br>

     <label>email</label>
     <input class="form-control" type="text"  value="{{ $users->email }}" readonly>
<br>
<label>image</label><br>
     <td><img src="../{{$users->image}}" alt=" " class="img-fluid"  width="100px" height="100px"></td>
<br>
     <label>date de naissance</label>
     <input class="form-control" type="text"  value="{{ $users->date_de_naissance }}" readonly>
<br>
        <label>lieu de naissance</label>
        <input class="form-control" type="text"  value="{{ $users->lieu_de_naissance }}" readonly>
    <br>
        <label>telephone principale</label>
        <input class="form-control" type="text"  value="{{ $users->telephone_principale }}" readonly>
        <br>
        <label>telephone secondaire</label>
        <input class="form-control" type="text"  value="{{ $users->telephone_secondaire }}" readonly>
        <br>
        <label>date de creation profil</label>
        <input class="form-control" type="text"  value="{{ $users->created_at }}" readonly>
    </div>




    @if  ( Auth::user()->classe =='السنة الأولى إبتدائي' )
 	<a href="{{route('eleve1')}}" class="btn btn-warning">retour</a>
     @elseif  ( Auth::user()->classe =='السنة الثانية إبتدائي' )
     <a href="{{route('eleve2')}}" class="btn btn-warning">retour</a>
     @elseif  ( Auth::user()->classe =='السنة ثالثة إبتدائي' )
     <a href="{{route('eleve3')}}" class="btn btn-warning">retour</a>
     @elseif  ( Auth::user()->classe =='السنة رابعة إبتدائي' )
     <a href="{{route('eleve4')}}" class="btn btn-warning">retour</a>
     @elseif  ( Auth::user()->classe =='السنة خامسة إبتدائي' )
     <a href="{{route('eleve5')}}" class="btn btn-warning">retour</a>
     @elseif  ( Auth::user()->classe =='السنة سادسة إبتدائي' )
     <a href="{{route('eleve6')}}" class="btn btn-warning">retour</a>
@endif
</form>
</body>

</html>
