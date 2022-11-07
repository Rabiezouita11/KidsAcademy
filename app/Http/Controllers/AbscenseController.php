<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB ;
class AbscenseController extends Controller
{
    public function index1()
    {
     
        $x = date('Y-m-d', time());
        $m = DB::table('users')->where('classe', '=', 'السنة الأولى إبتدائي')->get(); 
return view ('admin.absence.السنة الأولى إبتدائي',compact('x','m'));

    }
    public function index2()
    {
     
        $x = date('Y-m-d', time());
        $m = DB::table('users')->where('classe', '=', 'السنة الثانية إبتدائي')->get(); 
return view ('admin.absence.السنة الثانية إبتدائي',compact('x','m'));

    }
    public function index3()
    {
     
        $x = date('Y-m-d', time());
        $m = DB::table('users')->where('classe', '=', 'السنة ثالثة إبتدائي')->get(); 
return view ('admin.absence.السنة ثالثة إبتدائي',compact('x','m'));

    }
    public function index4()
    {
     
        $x = date('Y-m-d', time());
        $m = DB::table('users')->where('classe', '=', 'السنة رابعة إبتدائي')->get(); 
return view ('admin.absence.السنة رابعة إبتدائي',compact('x','m'));

    }
    public function index5()
    {
     
        $x = date('Y-m-d', time());
        $m = DB::table('users')->where('classe', '=', 'السنة خامسة إبتدائي')->get(); 
return view ('admin.absence.السنة خامسة إبتدائي',compact('x','m'));

    }
    public function index6()
    {
     
        $x = date('Y-m-d', time());
        $m = DB::table('users')->where('classe', '=', 'السنة سادسة إبتدائي')->get(); 
return view ('admin.absence.السنة سادسة إبتدائي',compact('x','m'));

    }
  /*   public function AfficheEditpresence(Request $request)
    {
         $id=$request['id'];
         $produits=\App\Models\User::find($id);

         return view('les produits.AfficheEditProduit',compact('produits'))->with('categories', categorie::all());
    } */
    public function Edit(Request $request)
    {

          $id=$request['id'];
         $user=\App\Models\User::find($id);
         $user->etat=$request['etat'];
         $user->date_absence=$request['date_absence'];
         $user->update();

         
   $historique = new \App\Models\Historique();
   $historique->nom=$request['nom'];
   $historique->date_presence=$request['date_presence'];
   $historique->classe=$request['classe'];
   $historique->etat=$request['etat'];
   $historique->save();

         return redirect()->route('index1')->with('vert','le produit a bien été modifié');

       }
       public function Edit2(Request $request)
       {
   
             $id=$request['id'];
            $user=\App\Models\User::find($id);
            $user->etat=$request['etat'];
            $user->date_absence=$request['date_absence'];
            $user->update();
            $historique = new \App\Models\Historique();
            $historique->nom=$request['nom'];
            $historique->date_presence=$request['date_presence'];
            $historique->classe=$request['classe'];
            $historique->etat=$request['etat'];
            $historique->save();
            return redirect()->route('index2')->with('vert','le produit a bien été modifié');
   
          }
          public function Edit3(Request $request)
          {
      
                $id=$request['id'];
               $user=\App\Models\User::find($id);
               $user->etat=$request['etat'];
               $user->date_absence=$request['date_absence'];
               $user->update();
               $historique = new \App\Models\Historique();
               $historique->nom=$request['nom'];
               $historique->date_presence=$request['date_presence'];
               $historique->classe=$request['classe'];
               $historique->etat=$request['etat'];
               $historique->save();
               return redirect()->route('index3')->with('vert','le produit a bien été modifié');
      
             }

             public function Edit4(Request $request)
             {
         
                   $id=$request['id'];
                  $user=\App\Models\User::find($id);
                  $user->etat=$request['etat'];
                  $user->date_absence=$request['date_absence'];
                  $user->update();
                  $historique = new \App\Models\Historique();
                  $historique->nom=$request['nom'];
                  $historique->date_presence=$request['date_presence'];
                  $historique->classe=$request['classe'];
                  $historique->etat=$request['etat'];
                  $historique->save();
                  return redirect()->route('index4')->with('vert','le produit a bien été modifié');
         
                }

                public function Edit5(Request $request)
                {
            
                      $id=$request['id'];
                     $user=\App\Models\User::find($id);
                     $user->etat=$request['etat'];
                     $user->date_absence=$request['date_absence'];
                     $user->update();
                     $historique = new \App\Models\Historique();
                     $historique->nom=$request['nom'];
                     $historique->date_presence=$request['date_presence'];
                     $historique->classe=$request['classe'];
                     $historique->etat=$request['etat'];
                     $historique->save();
                     return redirect()->route('index5')->with('vert','le produit a bien été modifié');
            
                   }

                   public function Edit6(Request $request)
                   {
               
                         $id=$request['id'];
                        $user=\App\Models\User::find($id);
                        $user->etat=$request['etat'];
                        $user->date_absence=$request['date_absence'];
                        $user->update();
                        $historique = new \App\Models\Historique();
                        $historique->nom=$request['nom'];
                        $historique->date_presence=$request['date_presence'];
                        $historique->classe=$request['classe'];
                        $historique->etat=$request['etat'];
                        $historique->save();
                        return redirect()->route('index6')->with('vert','le produit a bien été modifié');
               
                      }
            public function historique1()
            {

              $historique1 = DB::table('historiques')->where('classe', '=', 'السنة الأولى إبتدائي')->get(); 
              return view('admin.absence.historique_presence.index1',compact('historique1'));
            }
            public function historique2()
            {

 
              $historique2 = DB::table('historiques')->where('classe', '=', 'السنة الثانية إبتدائي')->get(); 
             
              return view('admin.absence.historique_presence.index2',compact('historique2'));
            }
            public function historique3()
            {

        
              $historique3 = DB::table('historiques')->where('classe', '=', 'السنة ثالثة إبتدائي')->get(); 
            
              return view('admin.absence.historique_presence.index3',compact('historique3'));
            }
            public function historique4()
            {

             
              $historique4 = DB::table('historiques')->where('classe', '=', 'السنة رابعة إبتدائي')->get(); 

              return view('admin.absence.historique_presence.index4',compact('historique4'));
            }
            public function historique5()
            {

              
              $historique5 = DB::table('historiques')->where('classe', '=', 'السنة خامسة إبتدائي')->get(); 
             
              return view('admin.absence.historique_presence.index5',compact('historique5'));
            }
            public function historique6()
            {


              $historique6 = DB::table('historiques')->where('classe', '=', 'السنة سادسة إبتدائي')->get(); 
              return view('admin.absence.historique_presence.index6',compact('historique6'));
            }


}
