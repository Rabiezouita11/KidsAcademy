<!DOCTYPE html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier Profil</h2>
 	<br/>
<form action="{{route('Modifierprofile')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $users->id }}">

 	<div class="form-group">
      
        <label>اسم الكامل</label>
     <input class="form-control" type="text" name="name" value="{{ $users->name }}" required></br>
     <label>بريد الالكتروني</label>
     <input class="form-control" type="email" name="email" value="{{ $users->email }}" required></br>
     <label>صف دراسي</label>
    
     <select name="classe" id="cat" class="form-control">

          @foreach($aa  as $cat)


      <option value="{{$cat->nom}}"  @if ($cat->nom == $users->classe) selected  @endif>  {{ $cat->nom }}</option>
      @endforeach

      </select>
     <label>تاريخ الميلاد</label>
     <input class="form-control" type="date" name="date_de_naissance" value="{{ $users->date_de_naissance }}" required></br>
     <label>مكان الولادة</label>
     <input class="form-control" type="text" name="lieu_de_naissance" value="{{ $users->lieu_de_naissance }}" required></br>
     <label>الهاتف الرئيسي</label>
     <input class="form-control" type="text" name="telephone_principale" value="{{ $users->telephone_principale }}" required></br>
     <div>@if ($errors->has('telephone_principale'))
                                <strong style="color: red;">{{ $errors->first('telephone_principale') }}</strong>
                                @endif</div>
     <label>الهاتف الثانوي</label>
     <input class="form-control" type="text" name="telephone_secondaire" value="{{ $users->telephone_secondaire }}" required></br>
     <div>@if ($errors->has('telephone_secondaire'))
                                <strong style="color: red;">{{ $errors->first('telephone_secondaire') }}</strong>
                                @endif</div>
   


</div>
<?php

$x= Auth::user()->image  ;

?>
<td><img src="{{$x}}" alt=" " class="img-fluid"  width="300px" height="150px"></td>

     <div class="form-group d-flex flex-column" >
        <label>صورة </label>

        <input class="form-control" type="file" name="image"  ></br>


</div>
</br>
        
    

    </br>

 

 	<a href="{{route('profile')}}" class="btn btn-default">لالغاء</a>
<button type="submit" class="btn btn-warning pull-right">للتعديل</button>

</form>
</body>

</html>


