<?php
$x=Auth::user()->id;

$b = DB::table('messages')->where('enseignant_id','=',$x)->count(); 
?>
{{$b}}