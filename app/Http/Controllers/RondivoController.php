<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RondivoController extends Controller
{
    public function index()
    {
        $rondivo=\App\Models\Rondivo::all();   
        return view ('Parent.rondivo.index',compact('rondivo'));
    }

    public function Modifierrondivo(Request $request)
    {
         $id=$request['id'];
         $rondivo=\App\Models\Rondivo::find($id);
         $rondivo->vue=$request['vue'];
         $rondivo->update();
    
         return redirect()->route('rondivo')->with('vert','rondivo est vue');
    }   

}
