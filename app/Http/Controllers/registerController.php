<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class registerController extends Controller
{
    public function index(){


return view ('admin.register');

    }

    public function save(Request $request)
    {
       $this->validate($request, [
           'name' => 'string|max:255',
           'image' => 'mimes:png,jpg',
           'password' => 'string|confirmed|min:8',
           'mot' => 'string|confirmed',
           'email' => 'string|unique:admins|max:100000',
           ]);
       $users = new \App\Models\Admin();
         $users->name = $request['name'];
         $users->email = $request['email'];
         $users->classe = $request['classe'];
         $users->password=Hash::make($request['password']);
         $users->mot = $request['mot'];
         if($request->hasFile('image')){
           $users->image=$request->image->store('Admin');
       }
         $users->save();

      
         return redirect()->route('admin.login')->with('success','اضيف بنجاح');
    }



}
