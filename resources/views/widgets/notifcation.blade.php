<?php
$b = DB::table('contacts')->count(); 
?>

<span class="label-count">{{$b}}</span>